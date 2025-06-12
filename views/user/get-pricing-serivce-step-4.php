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
                [Tên dịch vụ]
            </a>
            <i class="bi bi-chevron-right icon-breadrumb text-muted"></i>
            <a href="#" class="nav-link text-muted disabled fw-bold">
                Báo giá dịch vụ
            </a>
        </div>
    </div>

    <!-- Heading -->
    <div class="container text-center mb-4">
        <h1 class="fw-bold">
            Báo giá dịch vụ
        </h1>
    </div>

    <!-- Section Step -->
    <div class="container pb-5 mb-5">
        <div class="d-flex align-items-center justify-content-between">
            <div class="box-num-step active">
                1
                <span class="name-step active">
                    Chọn địa điểm
                </span>
            </div>
            <div class="line-step active"></div>

            <div class="box-num-step active">
                2
                <span class="name-step">
                    Chọn dịch vụ
                </span>
            </div>
            
            <div class="line-step active"></div>

            <div class="box-num-step active">
                3
                <span class="name-step">
                    Chọn ngày giờ, số lượng khách
                </span>
            </div>
            
            <div class="line-step active"></div>

            <div class="box-num-step">
                4
                <span class="name-step">
                    Thông tin khách hàng và cách thức liên hệ
                </span>
            </div>
            
            <div class="line-step"></div>

            <div class="box-num-step">
                5
                <span class="name-step">
                    Hoàn thành
                </span>
            </div>
        </div>
    </div>

    <!-- Section Form -->
    <div class="container">

        <!-- Choose Service -->
        <div class="w-100 d-flex flex-wrap align-items-center px-5 py-3 border mt-1">
            <div class="col-12 mb-3">
                <label for="full_name" class="form-label">Họ và tên</label>
                <input type="text" class="form-control" id="fullName" placeholder="Họ và tên">
            </div>
            
            <div class="col-12 d-flex align-items-center gap-3 mb-3">
                <div class="fw-bold small">Giới tính:</div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="place" id="place1">
                    <label class="form-check-label" for="place1">
                        miền Bắc
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="place" id="place2">
                    <label class="form-check-label" for="place2">
                        miền Trung
                    </label>
                </div>
            </div>

            <div class="col-12 mb-3">
                <label for="email" class="form-label">Địa chỉ e-mail</label>
                <input type="email" class="form-control" id="email" placeholder="Họ và tên">
            </div>

            <div class="col-12 mb-3">
                <label for="phone" class="form-label">Số điện thoại</label>
                <input type="text" class="form-control" id="phone" placeholder="+84 91 234 56 78">
            </div>
        </div>

        <div class="w-100 text-center mt-4">
            <a href="/bao-gia-dich-vu/step-3" class="btn btn-ouline-light border small px-4 me-3">
                Quay lại
            </a>
            <a href="/bao-gia-dich-vu/step-5" class="btn btn-ouline-light border small px-4">
                Trang sau
            </a>
        </div>
    </div>

</div>