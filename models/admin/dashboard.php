<?php

/**
 * Trả về doanh thu theo từng loại
 * @param string $type :
 * 
 * today : Hôm nay
 * 
 * yesterday : Hôm qua
 * 
 * this week : Tuần này
 * 
 * last week : Tuần trước
 * 
 * this month : Tháng này
 * 
 * last month : Tháng trước
 * 
 * @return int Doanh thu (VNĐ)
 */
function revenue($type) {

    // key truy vấn
    $arr_type = [
        'today',
        'yesterday',
        'this week',
        'last week',
        'this month',
        'last month',
    ];

    // check key truy vấn, nếu không trùng -> báo lỗi 404
    if(!in_array($type,$arr_type)) view_error(404);

    
    // CURDATE  : truy vấn ngày hôm nay
    // WEEKDAY  : truy vấn chỉ số của ngày trong tuần (với thứ 2 = 0, chủ nhật = 6)
    // DATE_SUB : giảm ngày
    // DATE_ADD : tăng ngày
    // INTERVAL : khoảng giá trị bạn muốn thêm (tương đương +- khi đi với hàm tăng giảm như DATE_SUB, DATE_ADD)

    // truy vấn hôm nay
    if($type === 'today') {
        $query_date = 'date(i.created_at) = CURDATE()';
    }
    // truy vấn ngày hôm qua
    elseif($type === 'yesterday') {
        $query_date = 'date(i.created_at) = CURDATE() - INTERVAL 1 DAY';
    }
    
    // truy vấn tuần này => từ thứ 2 tuần này -> chủ nhật tuần này
    else if($type === 'this week') {
        $query_date = 'date(i.created_at) >= DATE_SUB(CURDATE(), INTERVAL WEEKDAY(CURDATE()) DAY)
    AND i.created_at < DATE_ADD(DATE_SUB(CURDATE(), INTERVAL WEEKDAY(CURDATE()) DAY), INTERVAL 7 DAY)';
    }

    // truy vấn tuần trước => từ thứ 2 tuần trước -> chủ nhật tuần trước
    else if($type === 'last week') {
        $query_date = 'date(i.created_at) >= DATE_SUB(CURDATE(), INTERVAL WEEKDAY(CURDATE()) + 7 DAY)
    AND i.created_at < DATE_SUB(CURDATE(), INTERVAL WEEKDAY(CURDATE()) DAY)';
    }

    // truy vấn tháng này
    else  if($type === 'this month') {
        $query_date = 'MONTH(i.created_at) = MONTH(CURDATE())
    AND YEAR(i.created_at) = YEAR(CURDATE())';
    }

    // truy vấn tháng trước
    else  if($type === 'last month') {
        $query_date = 'MONTH(i.created_at) = MONTH(CURDATE() - INTERVAL 1 MONTH)
    AND YEAR(i.created_at) = YEAR(CURDATE() - INTERVAL 1 MONTH)';
    }

    // test return
    // return pdo_query(
    //     'SELECT i.*, SUM(id.quantity_invoice * id.price_invoice) total
    //     FROM invoice i
    //     JOIN invoice_detail id
    //     ON i.id_invoice = id.id_invoice
    //     WHERE status_invoice = 3
    //     AND '.$query_date.' 
    //     GROUP BY i.id_invoice
    //     ORDER BY i.created_at ASC'
    // );

    // trả về
    return pdo_query_value(
        'SELECT SUM(id.quantity_invoice * id.price_invoice) total
        FROM invoice i
        JOIN invoice_detail id
        ON i.id_invoice = id.id_invoice
        WHERE status_invoice = "hoàn thành"
        AND '.$query_date
    );
}

/**
 * Thống kê doanh thu từng tháng của năm hiện tại
 */
function revenue_chart($type) {
    if($type === 'nam') return pdo_query(
        'SELECT MONTH(i.created_at) AS month,SUM(id.quantity_invoice * id.price_invoice) AS total
        FROM invoice i
        JOIN invoice_detail id
        ON i.id_invoice = id.id_invoice
        WHERE YEAR(i.created_at) = YEAR(CURDATE())
        GROUP BY MONTH(i.created_at)
        ORDER BY month'
    );
    elseif($type === 'thang') return pdo_query(
            'SELECT WEEK(i.created_at, 1) AS week,
            SUM(id.quantity_invoice * id.price_invoice) AS total
            FROM invoice i
            JOIN invoice_detail id ON i.id_invoice = id.id_invoice
            WHERE MONTH(i.created_at) = MONTH(CURDATE()) 
            AND YEAR(i.created_at) = YEAR(CURDATE())
            GROUP BY YEARWEEK(i.created_at, 1)
            ORDER BY week'
    );
    elseif($type === 'tuan') return pdo_query(
        'SELECT WEEKDAY(i.created_at) AS date, SUM(id.quantity_invoice * id.price_invoice) AS total
        FROM invoice i
        JOIN invoice_detail id ON i.id_invoice = id.id_invoice
        WHERE i.created_at >= CURDATE() - INTERVAL WEEKDAY(CURDATE()) DAY -- Bắt đầu từ thứ Hai
        AND i.created_at < CURDATE() + INTERVAL (7 - WEEKDAY(CURDATE())) DAY -- Kết thúc vào Chủ Nhật
        GROUP BY DATE(i.created_at)
        ORDER BY date'
    );
}

function render_compare_revenue($type) {

    // loại so sánh
    if($type === 'today') {
        // lấy doanh thu
        $value_1 = revenue('today');
        $value_2 = revenue('yesterday');
    }
    else if($type === 'week') {
        // lấy doanh thu
        $value_1 = revenue('this week');
        $value_2 = revenue('last week');
    }
    else if($type === 'month') {
        // lấy doanh thu
        $value_1 = revenue('this month');
        $value_2 = revenue('last month');
    }
    else view_error(404);

    // nếu rỗng -> gán giá trị cho 1 tránh lỗi chia cho 0
    if(!$value_1) $value_1 = 1;
    if(!$value_2) $value_2 = 1;

        // so sánh
        if($value_1 > $value_2) {
            $indicator = 'rise';
            $icon = 'up';
            $percen = round(($value_1 / $value_2 - 1) * 100,2);
        }
        else {
            $indicator = 'fall';
            $icon = 'down';
            $percen = round((1 - $value_1 / $value_2) * 100,2);
        }


    return <<<HTML
    <div class="saw-indicator__delta saw-indicator__delta--{$indicator}">
        <div class="saw-indicator__delta-direction">
            <i class="fas fa-angle-{$icon}"></i>
        </div>
        <div class="saw-indicator__delta-value">{$percen} %</div>
    </div>
    HTML;
}

/**
 * Dùng để chuyển đổi chỉ số ngày trong tuần thành chuỗi ngày hợp lệ
 * 
 * Lưu ý : Thứ 2 = 0 ; ... ; Chủ nhật = 6
 * 
 * @param int $order Chỉ số cần chuyển dổi
 * 
 * @return string
 */
function convert_weekday($order) {
    if($order == 0) return 'Thứ 2';
    elseif($order == 1) return 'Thứ 3';
    elseif($order == 2) return 'Thứ 4';
    elseif($order == 3) return 'Thứ 5';
    elseif($order == 4) return 'Thứ 6';
    elseif($order == 5) return 'Thứ 7';
    elseif($order == 6) return 'Chủ nhật';
    else return '[ERR] Không hợp lệ khi chuyển đổi ngày';
}

function data_chart($start,$end,$type) {
    if(!in_array($type,['ngay','tuan','thang','nam'])) view_error(404);

    if($type === 'ngay') {
        $select = 'WEEKDAY(i.created_at) AS order_of_week, DATE(i.created_at)';
        $query = 'DATE(i.created_at) BETWEEN "'.$start.'" AND "'.$end.'"';
    }
    elseif($type === 'tuan') {
        $select = 'MIN(i.created_at) start, MAX(i.created_at) end, WEEK(i.created_at, 1)';
        $query = 'DATE(i.created_at) BETWEEN "'.$start.'" AND "'.$end.'"';
    }
    elseif($type === 'thang') {
        $select = 'MIN(i.created_at) start, MAX(i.created_at) end, MONTH(i.created_at)';
        $query = 'DATE(i.created_at) BETWEEN "'.$start.'" AND "'.$end.'"';
    }
    elseif($type === 'nam') {
        $select = 'MIN(i.created_at) start, MAX(i.created_at) end, YEAR(i.created_at)';
        $query = 'DATE(i.created_at) BETWEEN "'.$start.'" AND "'.$end.'"';
    }
    
    return pdo_query(
        'SELECT '.$select.' AS date, SUM(id.quantity_invoice * id.price_invoice) AS total
        FROM invoice i
        LEFT JOIN invoice_detail id ON i.id_invoice = id.id_invoice
        WHERE '.$query.'
        AND i.status_invoice = "hoàn thành"
        GROUP BY date
        ORDER BY date'
    );
}

/**
 * Chuyển đổi từ định dạng DD-MM-YYYY thành YYYY-MM-DD
 * @param mixed $date Ngày cần định dạng | Format : DD-MM-YYYY
 * @return string
 */
function convert_to_date_sql($date) {
    // Kiểm tra định dạng đầu vào
    if (preg_match('/^(\\d{2})-(\\d{2})-(\\d{4})$/', $date, $matches)) {
        // Trả về định dạng YYYY-MM-DD
        return $matches[3] . '-' . $matches[2] . '-' . $matches[1];
    }

    return 'Định dạng không đúng theo DD-MM-YYYY';
}