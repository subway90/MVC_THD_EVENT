<!-- Section Breadcrumb -->
<div style="background-color :#F1FAFF" class="container-fluid p-0 py-3 py-lg-5">
    <div class="container d-flex flex-column flex-lg-row justify-content-between align-items-center">
        <a href="/" class="btn btn-outline-blue rounded-4 px-3">
            <i class="bi bi-chevron-left small me-1"></i>
            Về trang chủ
        </a>

        <div class="d-flex flex-wrap justify-content-center align-items-center gap-2 mt-3 mt-lg-0">
            <a href="/" class="nav-link text-blue fw-bold">
                Trang chủ
            </a>
            <i class="bi bi-chevron-right icon-breadrumb text-muted"></i>
            <a href="/dia-diem-noi-bat" class="nav-link text-blue fw-bold">
                Địa điểm nổi bật
            </a>
            <i class="bi bi-chevron-right icon-breadrumb text-muted"></i>
            <a href="#" class="nav-link text-muted disabled fw-bold">
                So sánh
            </a>
        </div>
    </div>

    <!-- Heading -->
    <div class="container text-center py-lg-5">
        <h1 class="fw-bold">
            So sánh địa điểm
        </h1>
        <div class="text-neutral">
            Bạn đã chọn 3 địa điểm
        </div>
    </div>

    <!-- Table List Item Compare -->
     <style>
        tr {
            background-color: transparent;
        }
        td {
            padding: 0 20px !important;
            background-color: transparent !important;
            border-right: 1px solid#aaaaaa;
            border-left: 1px solid #aaaaaa;
            border-bottom: none;
        }
     </style>
    <div class="px-lg-5 mx-lg-5 py-3">
        <div class="table-responsive">
            <table class="table">
                <tbody>
                    <!-- Image -->
                    <tr>
                        <td class="text-center">
                            <img src="<?= URL_STORAGE?>room/1.jpg" alt="Ảnh" class="img-compare rounded-top-4">
                        </td>
                        <td class="text-center">
                            <img src="<?= URL_STORAGE?>room/2.jpg" alt="Ảnh" class="img-compare rounded-top-4">
                        </td>
                        <td class="text-center">
                            <img src="<?= URL_STORAGE?>room/3.jpg" alt="Ảnh" class="img-compare rounded-top-4">
                        </td>
                    </tr>
                    <!-- Name -->
                    <tr>
                        <td>
                            <h4 class="fw-bold pt-4">
                                WYNDHAM GARDEN SONASEA VAN DON
                            </h4>
                        </td>
                        <td>
                            <h4 class="fw-bold pt-4">
                                Radisson Blu Hotel Halong Bay
                            </h4>
                        </td>
                        <td>
                            <h4 class="fw-bold pt-4">
                                Soliel Hạ Long
                            </h4>
                        </td>
                    </tr>
                    <!-- Address -->
                    <tr>
                        <td>
                            <div class="d-flex align-items-center fw-semibold text-muted gap-2">
                                <i class="bi bi-geo-alt"></i>
                                <small class="">
                                    Sonasea Long Beach, Ha Long, Van Don | Quang Ninh
                                </small>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center fw-semibold text-muted gap-2">
                                <i class="bi bi-geo-alt"></i>
                                <small class="">
                                    Lô N8-1/Số 47 Cái Dăm, Khu đô thị, Hạ Long
                                </small>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center fw-semibold text-muted gap-2">
                                <i class="bi bi-geo-alt"></i>
                                <small class="">
                                    82-84 Hạ Long, Bãi Cháy, Hạ Long, Quảng Ninh
                                </small>
                            </div>
                        </td>
                    </tr>
                    <!-- Feedback Star -->
                    <tr>
                        <td>
                            <div class="d-flex align-items-center gap-2">
                                <div class="d-flex align-items-center gap-1">
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-half text-warning"></i>
                                </div>
                                <div class="small text-neutral">
                                    (4.5/5.0)
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center gap-2">
                                <div class="d-flex align-items-center gap-1">
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star text-warning"></i>
                                </div>
                                <div class="small text-neutral">
                                    (4.0/5.0)
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center gap-2">
                                <div class="d-flex align-items-center gap-1">
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                </div>
                                <div class="small text-neutral">
                                    (5.0/5.0)
                                </div>
                            </div>
                        </td>
                    </tr>
                    <!-- Hot option -->
                    <tr>
                        <td>
                            <div class="py-4">
                                <h6 class="mb-2">Điểm nổi bật</h6>
                                <div class="d-flex flex-column gap-2">

                                    <div class="d-flex align-items-center gap-2">
                                        <img width="18px" src="<?= URL_STORAGE ?>system/check_icon.jpg" alt="">
                                        <div class="small text-muted">
                                            Khu nghỉ dưỡng mang thương hiệu 5 sao quốc tế đầu tiên tại Vân Đồn
                                        </div>
                                    </div>

                                    <div class="d-flex align-items-center gap-2">
                                        <img width="18px" src="<?= URL_STORAGE ?>system/check_icon.jpg" alt="">
                                        <div class="small text-muted">
                                            Tầm nhìn toàn cảnh ra Vịnh Bái Tử Long
                                        </div>
                                    </div>

                                    <div class="d-flex align-items-center gap-2">
                                        <img width="18px" src="<?= URL_STORAGE ?>system/check_icon.jpg" alt="">
                                        <div class="small text-muted">
                                            Nhà hàng và Bar phong phú 
                                        </div>
                                    </div>

                                    <div class="d-flex align-items-center gap-2">
                                        <img width="18px" src="<?= URL_STORAGE ?>system/check_icon.jpg" alt="">
                                        <div class="small text-muted">
                                            Bữa sáng miễn phí hàng ngày
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="py-4">
                                <h6 class="mb-2">Điểm nổi bật</h6>
                                <div class="d-flex flex-column gap-2">

                                    <div class="d-flex align-items-center gap-2">
                                        <img width="18px" src="<?= URL_STORAGE ?>system/check_icon.jpg" alt="">
                                        <div class="small text-muted">
                                            Khách sạn 5 sao
                                        </div>
                                    </div>

                                    <div class="d-flex align-items-center gap-2">
                                        <img width="18px" src="<?= URL_STORAGE ?>system/check_icon.jpg" alt="">
                                        <div class="small text-muted">
                                            Tầm nhìn ngoạn mục ra hồ hoặc vịnh xung quanh
                                        </div>
                                    </div>

                                    <div class="d-flex align-items-center gap-2">
                                        <img width="18px" src="<?= URL_STORAGE ?>system/check_icon.jpg" alt="">
                                        <div class="small text-muted">
                                            Phục vụ bữa sáng với thực đơn à la carte và kiểu Mỹ
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="py-4">
                                <h6 class="mb-2">Điểm nổi bật</h6>
                                <div class="d-flex flex-column gap-2">

                                    <div class="d-flex align-items-center gap-2">
                                        <img width="18px" src="<?= URL_STORAGE ?>system/check_icon.jpg" alt="">
                                        <div class="small text-muted">
                                            Tọa lạc ở trung tâm thành phố Hạ Long, đối diện với công viên giải trí SunWorld và tầm nhìn toàn cảnh ra vịnh Hạ Long
                                        </div>
                                    </div>

                                    <div class="d-flex align-items-center gap-2">
                                        <img width="18px" src="<?= URL_STORAGE ?>system/check_icon.jpg" alt="">
                                        <div class="small text-muted">
                                            Dịch vụ đưa đón khách sân bay
                                        </div>
                                    </div>

                                    <div class="d-flex align-items-center gap-2">
                                        <img width="18px" src="<?= URL_STORAGE ?>system/check_icon.jpg" alt="">
                                        <div class="small text-muted">
                                            Phục vụ bữa sáng thực đơn buffet và kiểu lục địa
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </td>
                    </tr>
                    <!-- List type room -->
                    <tr>
                        <td>
                            <div class="py-4">
                                <h6 class="mb-2">Loại phòng</h6>
                                <div class="d-flex flex-column gap-2">

                                    <div class="d-flex flex-column justify-content-center gap-1 px-3 py-1 border-start border-primary">
                                        <div style="font-size: 14px" class="fw-bold small">
                                            Phòng nghỉ
                                        </div>
                                        <div style="font-size: 12px" class="small text-muted">
                                            Phòng rộng rãi có tầm nhìn ra biển
                                        </div>
                                    </div>

                                    <div class="d-flex flex-column justify-content-center gap-1 px-3 py-1 border-start border-primary">
                                        <div style="font-size: 14px" class="fw-bold small">
                                            Phòng Suite
                                        </div>
                                        <div style="font-size: 12px" class="small text-muted">
                                            Phòng rộng rãi có tầm nhìn ra biển
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="py-4">
                                <h6 class="mb-2">Loại phòng</h6>
                                <div class="d-flex flex-column gap-2">

                                    <div class="d-flex flex-column justify-content-center gap-1 px-3 py-1 border-start border-primary">
                                        <div style="font-size: 14px" class="fw-bold small">
                                            Phòng nghỉ
                                        </div>
                                        <div style="font-size: 12px" class="small text-muted">
                                            Được thiết kế kết hợp sự thanh lịch hiện đại với sự thoải mái đặc biệt.
                                        </div>
                                    </div>

                                    <div class="d-flex flex-column justify-content-center gap-1 px-3 py-1 border-start border-primary">
                                        <div style="font-size: 14px" class="fw-bold small">
                                            Phòng Suite
                                        </div>
                                        <div style="font-size: 12px" class="small text-muted">
                                            Thiết kế đặc biệt cùng những tiện nghi cao cấp.
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="py-4">
                                <h6 class="mb-2">Loại phòng</h6>
                                <div class="d-flex flex-column gap-2">

                                    <div class="d-flex flex-column justify-content-center gap-1 px-3 py-1 border-start border-primary">
                                        <div style="font-size: 14px" class="fw-bold small">
                                            252 phòng Nghỉ
                                        </div>
                                        <div style="font-size: 12px" class="small text-muted">
                                            Tiêu chuẩn đến cao cấp được bố trí hài hòa trong lối kiến trúc độc đáo
                                        </div>
                                    </div>

                                    <div class="d-flex flex-column justify-content-center gap-1 px-3 py-1 border-start border-primary">
                                        <div style="font-size: 14px" class="fw-bold small">
                                            198 phòng Deluxe King/ Twin
                                        </div>
                                        <div style="font-size: 12px" class="small text-muted">
                                        </div>
                                    </div>

                                    <div class="d-flex flex-column justify-content-center gap-1 px-3 py-1 border-start border-primary">
                                        <div style="font-size: 14px" class="fw-bold small">
                                            13 phòng Premier with Bay View
                                        </div>
                                        <div style="font-size: 12px" class="small text-muted">
                                        </div>
                                    </div>

                                    <div class="d-flex flex-column justify-content-center gap-1 px-3 py-1 border-start border-primary">
                                        <div style="font-size: 14px" class="fw-bold small">
                                            21 phòng Junior Suites
                                        </div>
                                        <div style="font-size: 12px" class="small text-muted">
                                        </div>
                                    </div>

                                    <div class="d-flex flex-column justify-content-center gap-1 px-3 py-1 border-start border-primary">
                                        <div style="font-size: 14px" class="fw-bold small">
                                            7 Executive Suites
                                        </div>
                                        <div style="font-size: 12px" class="small text-muted">
                                        </div>
                                    </div>
                                    
                                    <div class="d-flex flex-column justify-content-center gap-1 px-3 py-1 border-start border-primary">
                                        <div style="font-size: 14px" class="fw-bold small">
                                            9 Family Suites
                                        </div>
                                        <div style="font-size: 12px" class="small text-muted">
                                        </div>
                                    </div>
                                    
                                    <div class="d-flex flex-column justify-content-center gap-1 px-3 py-1 border-start border-primary">
                                        <div style="font-size: 14px" class="fw-bold small">
                                            2 Bedroom
                                        </div>
                                        <div style="font-size: 12px" class="small text-muted">
                                        </div>
                                    </div>

                                    <div class="d-flex flex-column justify-content-center gap-1 px-3 py-1 border-start border-primary">
                                        <div style="font-size: 14px" class="fw-bold small">
                                            2 Predient Suites
                                        </div>
                                        <div style="font-size: 12px" class="small text-muted">
                                        </div>
                                    </div>

                                    <div class="d-flex flex-column justify-content-center gap-1 px-3 py-1 border-start border-primary">
                                        <div style="font-size: 14px" class="fw-bold small">
                                        </div>
                                        <div style="font-size: 12px" class="small text-muted">
                                            Tất cả các phòng đều sở hữu tiện nghi hiện đại với tầm nhìn bao quát toàn cảnh thành phố và Vịnh Hạ Long thơ mộng.
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </td>
                    </tr>
                    <!-- List utils -->
                    <tr>
                        <td>
                            <div class="py-4">
                                <h6 class="mb-2">Tiện ích</h6>
                                <div class="d-flex flex-wrap gap-2">
                                    <div class="badge-util">
                                        3 hồ bơi
                                    </div>
                                    <div class="badge-util">
                                        Wifi miễn phí
                                    </div>
                                    <div class="badge-util">
                                        Chỗ đổ xe miễn phí
                                    </div>
                                    <div class="badge-util">
                                        4 Nhà hàng
                                    </div>
                                    <div class="badge-util">
                                        Quầy bar
                                    </div>
                                    <div class="badge-util">
                                        Giáp biển
                                    </div>
                                    <div class="badge-util">
                                        Khu vực bãi tắm riêng
                                    </div>
                                    <div class="badge-util">
                                        Bữa sáng
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="py-4">
                                <h6 class="mb-2">Tiện ích</h6>
                                <div class="d-flex flex-wrap gap-2">
                                    <div class="badge-util">
                                        2 hồ bơi
                                    </div>
                                    <div class="badge-util">
                                        Wifi miễn phí
                                    </div>
                                    <div class="badge-util">
                                        Phòng gia đình
                                    </div>
                                    <div class="badge-util">
                                        Chỗ đổ xe miễn phí
                                    </div>
                                    <div class="badge-util">
                                        Phòng không hút thuốc
                                    </div>
                                    <div class="badge-util">
                                        Trung tâm Spa & chăm sóc sức khoẻ
                                    </div>
                                    <div class="badge-util">
                                        Lễ tân 24 giờ
                                    </div>
                                    <div class="badge-util">
                                        Trung tâm thể dục
                                    </div>
                                    <div class="badge-util">
                                        Quầy Bar
                                    </div>
                                    <div class="badge-util">
                                        Bữa sáng
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="py-4">
                                <h6 class="mb-2">Tiện ích</h6>
                                <div class="d-flex flex-wrap gap-2">
                                    <div class="badge-util">
                                        Hồ bơi trong nhà
                                    </div>
                                    <div class="badge-util">
                                        Wifi miễn phí
                                    </div>
                                    <div class="badge-util">
                                        Xe đưa đón sân bay
                                    </div>
                                    <div class="badge-util">
                                        Phòng gia đình
                                    </div>
                                    <div class="badge-util">
                                        Chỗ đỗ xe
                                    </div>
                                    <div class="badge-util">
                                        Phòng không hút thuốc
                                    </div>
                                    <div class="badge-util">
                                        Trung tâm Spa & chăm sóc sức khoẻ
                                    </div>
                                    <div class="badge-util">
                                        Lễ tân 24 giờ
                                    </div>
                                    <div class="badge-util">
                                        Quầy Bar
                                    </div>
                                    <div class="badge-util">
                                        Bữa sáng tốt
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <!-- Policy -->
                    <tr>
                        <td>
                            <div class="py-4">
                                <h6 class="mb-2">Chính sách</h6>

                                <div class="d-flex align-items-center gap-3 text-muted small">
                                    <small><small><i class="fas fa-circle small"></i></small></small>
                                    Check-in: 15h
                                </div>

                                <div class="d-flex align-items-center gap-3 text-muted small">
                                    <small><small><i class="fas fa-circle small"></i></small></small>
                                    Check-out: 12h
                                </div>

                                <div class="d-flex align-items-center gap-3 text-muted small">
                                    <small><small><i class="fas fa-circle small"></i></small></small>
                                    No smoking
                                </div>

                                <div class="d-flex align-items-center gap-3 text-muted small">
                                    <small><small><i class="fas fa-circle small"></i></small></small>
                                    No pets allowed
                                </div>

                            </div>
                        </td>
                        <td>
                            <div class="py-4">
                                <h6 class="mb-2">Chính sách</h6>
                                
                                <div class="d-flex align-items-center gap-3 text-muted small">
                                    <small><small><i class="fas fa-circle small"></i></small></small>
                                    Check-in: 15h - 23h
                                </div>

                                <div class="d-flex align-items-center gap-3 text-muted small">
                                    <small><small><i class="fas fa-circle small"></i></small></small>
                                    Check-out: 6h - 11h
                                </div>

                                <div class="d-flex align-items-center gap-3 text-muted small">
                                    <small><small><i class="fas fa-circle small"></i></small></small>
                                    No smoking
                                </div>

                                <div class="d-flex align-items-center gap-3 text-muted small">
                                    <small><small><i class="fas fa-circle small"></i></small></small>
                                    No pets allowed
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="py-4">
                                <h6 class="mb-2">Chính sách</h6>
                                
                                <div class="d-flex align-items-center gap-3 text-muted small">
                                    <small><small><i class="fas fa-circle small"></i></small></small>
                                    Check-in: 14h - 23h30
                                </div>

                                <div class="d-flex align-items-center gap-3 text-muted small">
                                    <small><small><i class="fas fa-circle small"></i></small></small>
                                    Check-out: 11h - 12h
                                </div>

                                <div class="d-flex align-items-center gap-3 text-muted small">
                                    <small><small><i class="fas fa-circle small"></i></small></small>
                                    No smoking
                                </div>

                                <div class="d-flex align-items-center gap-3 text-muted small">
                                    <small><small><i class="fas fa-circle small"></i></small></small>
                                    No pets allowed
                                </div>

                            </div>
                        </td>
                    </tr>
                    <!-- Button -->
                    <tr>
                        <td>
                            <a href="<?= URL ?>bao-gia-dich-vu" class="btn btn-outline-blue fw-bold w-100">
                                <small>Báo giá dịch vụ</small>
                            </a>
                        </td>
                        <td>
                            <a href="<?= URL ?>bao-gia-dich-vu" class="btn btn-outline-blue fw-bold w-100">
                                <small>Báo giá dịch vụ</small>
                            </a>
                        </td>
                        <td>
                            <a href="<?= URL ?>bao-gia-dich-vu" class="btn btn-outline-blue fw-bold w-100">
                                <small>Báo giá dịch vụ</small>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
            
            
            
            
            

            

            

            
        </div>
    </div>


</div>