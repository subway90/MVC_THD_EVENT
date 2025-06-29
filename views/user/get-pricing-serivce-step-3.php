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
    <div class="container pb-lg-5 mb-5">
        <div class="d-flex align-items-center justify-content-between">
            <div class="box-num-step active">
                1
                 <span class="name-step d-none d-lg-block">
                    Chọn địa điểm
                </span>
            </div>
            <div class="line-step active"></div>

            <div class="box-num-step active">
                2
                 <span class="name-step d-none d-lg-block">
                    Chọn dịch vụ
                </span>
            </div>
            
            <div class="line-step active"></div>

            <div class="box-num-step">
                3
                 <span class="name-step d-none d-lg-block">
                    Chọn ngày giờ, số lượng khách
                </span>
            </div>
            
            <div class="line-step"></div>

            <div class="box-num-step">
                4
                 <span class="name-step d-none d-lg-block">
                    Thông tin khách hàng và cách thức liên hệ
                </span>
            </div>
            
            <div class="line-step"></div>

            <div class="box-num-step">
                5
                 <span class="name-step d-none d-lg-block">
                    Hoàn thành
                </span>
            </div>
        </div>

        <!-- Name Step In Mobile/Tablet -->
        <h3 class="fw-bold text-uppercase text-blue text-center d-block d-lg-none mt-5">
            Chọn ngày giờ, số lượng khách
        </h3>
    </div>

    <!-- Section Form -->
    <div class="container">

        <!-- Choose Service -->
        <div class="w-100 d-flex flex-wrap align-items-center px-lg-5 py-lg-3 border mt-1">
            <div class="col-12 col-lg-6 d-flex align-items-center gap-2 justify-content-center mb-3 p-2">
                <label for="dateStart" class="text-nowrap col">Thời gian khởi hành</label>
                <input type="date" class="form-control col" value="<?= date('Y-m-d') ?>" min="<?= date('Y-m-d') ?>" id="dateStart" placeholder="Nhấn chọn thời gian">
            </div>
            <div class="col-12 col-lg-6 d-flex align-items-center gap-2 justify-content-center mb-3 p-2">
                <label for="dateStart" class="text-nowrap col">Thời gian kết thúc</label>
                <input type="date" class="form-control col" value="<?= date('Y-m-d') ?>" min="<?= date('Y-m-d') ?>" id="dateStart" placeholder="Nhấn chọn thời gian">
            </div>
            <div class="col-12 col-lg-6 d-flex align-items-center gap-2 justify-content-center mb-3 p-2">
                <label for="quantityPerson" class="text-nowrap col">Số lượng</label>
                <input type="number" step="1" min="1" class="form-control col" value="" id="quantityPerson" placeholder="Nhập số lượng người đi">
            </div>
        </div>

        <div class="w-100 text-center mt-4">
            <a href="/bao-gia-dich-vu/step-2" class="btn btn-ouline-light border small px-4 me-3">
                Quay lại
            </a>
            <a href="/bao-gia-dich-vu/step-4" class="btn btn-ouline-light border small px-4">
                Trang sau
            </a>
        </div>
    </div>

</div>