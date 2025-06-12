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
                                Orchid By Wyndham Halong Ocean Park
                            </h4>
                        </td>
                        <td>
                            <h4 class="fw-bold pt-4">
                                Villa By Wyndham Halong
                            </h4>
                        </td>
                        <td>
                            <h4 class="fw-bold pt-4">
                                Resort By Wyndham Halong
                            </h4>
                        </td>
                    </tr>
                    <!-- Address -->
                    <tr>
                        <td>
                            <div class="d-flex align-items-center fw-semibold text-muted gap-2">
                                <i class="bi bi-geo-alt"></i>
                                <small class="">
                                    Hạ Long, Quảng Ninh
                                </small>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center fw-semibold text-muted gap-2">
                                <i class="bi bi-geo-alt"></i>
                                <small class="">
                                    Hạ Long, Quảng Ninh
                                </small>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center fw-semibold text-muted gap-2">
                                <i class="bi bi-geo-alt"></i>
                                <small class="">
                                    Hạ Long, Quảng Ninh
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
                                            Bãi biển riêng chỉ cách 2 phút
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
                                            Bãi biển riêng chỉ cách 5 phút
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center gap-2">
                                        <img width="18px" src="<?= URL_STORAGE ?>system/check_icon.jpg" alt="">
                                        <div class="small text-muted">
                                            Phòng tắm khoáng miễn phí
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
                                            Có bãi tắm riêng, view phòng nhìn biển
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center gap-2">
                                        <img width="18px" src="<?= URL_STORAGE ?>system/check_icon.jpg" alt="">
                                        <div class="small text-muted">
                                            Dịch vụ spa & xông hơi miễn phí
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
                    </tr>
                    <!-- List type room -->
                    <tr>
                        <td>
                            <div class="py-4">
                                <h6 class="mb-2">Loại phòng</h6>
                                <div class="d-flex flex-column gap-2">
                                    <div class="d-flex flex-column justify-content-center gap-1 px-3 py-1 border-start border-primary">
                                        <div style="font-size: 14px" class="fw-bold small">
                                            Phòng sang trọng
                                        </div>
                                        <div style="font-size: 12px" class="small text-muted">
                                            Phòng rộng rãi có tầm nhìn ra biển, giường cỡ lớn
                                        </div>
                                    </div>
                                    <div class="d-flex flex-column justify-content-center gap-1 px-3 py-1 border-start border-primary">
                                        <div style="font-size: 14px" class="fw-bold small">
                                            Phòng suite
                                        </div>
                                        <div style="font-size: 12px" class="small text-muted">
                                            Phòng suite sang trọng với tầm nhìn toàn cảnh ra biển
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
                                            Phòng sang trọng
                                        </div>
                                        <div style="font-size: 12px" class="small text-muted">
                                            Phòng rộng rãi có tầm nhìn ra biển, giường cỡ lớn
                                        </div>
                                    </div>
                                    <div class="d-flex flex-column justify-content-center gap-1 px-3 py-1 border-start border-primary">
                                        <div style="font-size: 14px" class="fw-bold small">
                                            Phòng suite
                                        </div>
                                        <div style="font-size: 12px" class="small text-muted">
                                            Phòng suite sang trọng với tầm nhìn toàn cảnh ra biển
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
                                            Phòng sang trọng
                                        </div>
                                        <div style="font-size: 12px" class="small text-muted">
                                            Phòng rộng rãi có tầm nhìn ra biển, giường cỡ lớn
                                        </div>
                                    </div>
                                    <div class="d-flex flex-column justify-content-center gap-1 px-3 py-1 border-start border-primary">
                                        <div style="font-size: 14px" class="fw-bold small">
                                            Phòng suite
                                        </div>
                                        <div style="font-size: 12px" class="small text-muted">
                                            Phòng suite sang trọng với tầm nhìn toàn cảnh ra biển
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
                                        <i class="fas fa-wifi"></i>
                                        Wifi miễn phí
                                    </div>
                                    <div class="badge-util">
                                        <i class="fas fa-parking"></i>
                                        Bãi đổ xe
                                    </div>
                                    <div class="badge-util">
                                        <i class="fas fa-dumbbell"></i>
                                        Phòng GYM
                                    </div>
                                    <div class="badge-util">
                                        <i class="fas fa-utensils"></i>
                                        Nhà hàng
                                    </div>
                                    <div class="badge-util">
                                        <i class="fas fa-tv"></i>
                                        TV Smart
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="py-4">
                                <h6 class="mb-2">Tiện ích</h6>
                                <div class="d-flex flex-wrap gap-2">
                                    <div class="badge-util">
                                        <i class="fas fa-wifi"></i>
                                        Wifi miễn phí
                                    </div>
                                    <div class="badge-util">
                                        <i class="fas fa-parking"></i>
                                        Bãi đổ xe
                                    </div>
                                    <div class="badge-util">
                                        <i class="fas fa-dumbbell"></i>
                                        Phòng GYM
                                    </div>
                                    <div class="badge-util">
                                        <i class="fas fa-utensils"></i>
                                        Nhà hàng
                                    </div>
                                    <div class="badge-util">
                                        <i class="fas fa-tv"></i>
                                        TV Smart
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="py-4">
                                <h6 class="mb-2">Tiện ích</h6>
                                <div class="d-flex flex-wrap gap-2">
                                    <div class="badge-util">
                                        <i class="fas fa-wifi"></i>
                                        Wifi miễn phí
                                    </div>
                                    <div class="badge-util">
                                        <i class="fas fa-parking"></i>
                                        Bãi đổ xe
                                    </div>
                                    <div class="badge-util">
                                        <i class="fas fa-dumbbell"></i>
                                        Phòng GYM
                                    </div>
                                    <div class="badge-util">
                                        <i class="fas fa-utensils"></i>
                                        Nhà hàng
                                    </div>
                                    <div class="badge-util">
                                        <i class="fas fa-tv"></i>
                                        TV Smart
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
                                    Check-in: 14:00, Check-out: 12:00
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="py-4">
                                <h6 class="mb-2">Chính sách</h6>
                                <div class="d-flex align-items-center gap-3 text-muted small">
                                    <small><small><i class="fas fa-circle small"></i></small></small>
                                    Check-in: 14:00, Check-out: 11:50
                                </div>
                                <div class="d-flex align-items-center gap-3 text-muted small">
                                    <small><small><i class="fas fa-circle small"></i></small></small>
                                    No Smoking
                                </div>
                                <div class="d-flex align-items-center gap-3 text-muted small">
                                    <small><small><i class="fas fa-circle small"></i></small></small>
                                    No Pets Allowed
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="py-4">
                                <h6 class="mb-2">Chính sách</h6>
                                <div class="d-flex align-items-center gap-3 text-muted small">
                                    <small><small><i class="fas fa-circle small"></i></small></small>
                                    Check-in: 14:00, Check-out: 13:00
                                </div>
                                <div class="d-flex align-items-center gap-3 text-muted small">
                                    <small><small><i class="fas fa-circle small"></i></small></small>
                                    No Pets Allowed
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