<!-- Section Slogan -->
<div class="container-fluid d-flex justify-content-center text-center px-0 pt-lg-5 pt-3">
    <span id="slogan" class="line-slogan text-blue fw-bold"></span>
</div>

<!-- Section Introduce Company -->
<div class="container-fluid px-0 d-flex justify-content-center">
    <style>
        .video-container {
            position: relative;
            overflow: hidden;
            padding-top: 56.25%; /* Tỷ lệ khung hình 16:9 */
        }

        .video-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border-radius: 16px;
        }

        .video-container-project iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border-radius: 0 16px 16px 0;
        }
    </style>
    <div class="container row py-5">

        <div class="col-12 d-inline d-lg-none">
            <div class="text-center text-lg-start">
                <h5 class="fw-bold text-blue">THD EVENT</h5>
                <h5 class="fw-bold text-blue text-nowrap small">Tổ chức sự kiện chuyên nghiệp uy tín</h5>
            </div>
        </div>

        <div class="col-12 col-lg-6">
            <div class="video-container">
                <iframe 
                    src="https://www.youtube.com/embed/1mpVYOFG4YA?autoplay=1&mute=1" 
                    frameborder="0" 
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                    allowfullscreen>
                </iframe>
            </div>
        </div>

        <div class="col-12 col-lg-6 d-none d-lg-inline">
            <div class="d-flex flex-column justify-content-between h-100">
                <div class="">
                    <div class="text-center text-lg-start">
                        <h4 class="fw-bold text-blue">THD EVENT</h4>
                        <h4 class="fw-bold text-blue">Tổ chức sự kiện chuyên nghiệp uy tín</h4>
                    </div>
                    
                    <div class="text-start">
                        <p class="mt-3">
                            THD Event là đơn vị chuyên hoạt động trong lĩnh vực tổ chức sự kiện, hội nghị, hội thảo, teambuilding… cung cấp thiết bị sự kiện, nhân sự sự kiện cao cấp. Với hơn 8 năm kinh nghiệm cùng hàng trăm sự kiện đa dạng, chúng tôi tự hào mang đến giải pháp toàn diện – từ ý tưởng đến hiện thực.
                        </p>
                        <p class="mt-3">
                            Cam kết "Không ngừng vươn tới đỉnh cao – Kiến tạo giá trị bền vững", THD Travel & Event chính là đối tác lý tưởng cho những trải nghiệm ấn tượng và khác biệt. Hãy cùng chúng tôi biến mọi khoảnh khắc thành tuyệt tác!
                        </p>
                    </div>
                </div>
                
                <a href="#" class="btn rounded-4 btn-outline-blue col-12 col-lg-6 text-blue">
                    Về chúng tôi
                </a>
            </div>
        </div>

        <div class="col-12 d-block d-lg-none">
            <div class="text-center text-lg-start">
                <p class="mt-3">
                    THD Event là đơn vị chuyên hoạt động trong lĩnh vực tổ chức sự kiện, hội nghị, hội thảo, teambuilding… cung cấp thiết bị sự kiện, nhân sự sự kiện cao cấp. Với hơn 8 năm kinh nghiệm cùng hàng trăm sự kiện đa dạng, chúng tôi tự hào mang đến giải pháp toàn diện – từ ý tưởng đến hiện thực.
                </p>
                <p class="mt-3">
                    Cam kết "Không ngừng vươn tới đỉnh cao – Kiến tạo giá trị bền vững", THD Travel & Event chính là đối tác lý tưởng cho những trải nghiệm ấn tượng và khác biệt. Hãy cùng chúng tôi biến mọi khoảnh khắc thành tuyệt tác!
                </p>
            </div>
            <a href="#" class="btn rounded-4 btn-outline-blue col-12 col-lg-6 mb-lg-3 text-blue">
                Về chúng tôi
            </a>
        </div>

    </div>
</div>

<!-- Section Service -->
<div class="section browse">
    <div class="browse__center center">
        <div class="py-5 text-center">
            <h1 class="ff-main fw-bold text-blue">
                Dịch vụ của chúng tôi
            </h1>
            <div class="fs-5">
                Đồng hành cùng doanh nghiệp trong từng dấu mốc quan trọng
            </div>
        </div>
        <div class="browse__inner">
            <div class="text-center mb-4">
                <h2 class="ff-main browse__title fw-bold h2 text-blue text-uppercase">Tổ chức sự kiện</h2>
            </div>
            <div class="browse__wrapper">
                <div class="row">
                    <?php foreach (ARR_S_1 as $i => $service) :?>
                    <a class="col-6 col-lg-3 mb-4 mb-lg-5 text-decoration-none px-1 px-lg-2" href="#">
                        <div class="card-service h-100">
                            <div class="mb-1">
                                <img class="w-100" src="<?= URL_STORAGE.$service['img'] ?>" alt="<?= $service['img'] ?>">
                            </div>
                            <div class="name-service text-uppercase d-flex align-item-center justify-content-center text-blue fw-bold text-center p-1 p-lg-2"><?= $service['name'] ?></div>
                        </div>
                    </a>
                    <?php endforeach ?>
                </div>
            </div>
        </div>

        <div class="browse__inner">
            <div class="text-center mb-4">
                <h2 class="ff-main browse__title fw-bold h2 text-blue text-uppercase">Tổ chức team building</h2>
            </div>
            <div class="browse__wrapper">
                <div class="row">
                    <?php foreach (ARR_S_2 as $i => $service) :?>
                    <a class="col-6 col-lg-3 mb-4 mb-lg-5 text-decoration-none px-1 px-lg-2" href="#">
                        <div class="card-service h-100">
                            <div class="mb-1">
                                <img class="w-100" src="<?= URL_STORAGE.$service['img'] ?>" alt="<?= $service['img'] ?>">
                            </div>
                            <div class="name-service text-uppercase d-flex align-item-center justify-content-center text-blue fw-bold text-center p-1 p-lg-2"><?= $service['name'] ?></div>
                        </div>
                    </a>
                    <?php endforeach ?>
                </div>
            </div>
        </div>

        <div class="browse__inner">
            <div class="text-center mb-4">
                <h2 class="ff-main browse__title fw-bold h2 text-blue text-uppercase">Thuê nhân sự sự kiện</h2>
            </div>
            <div class="browse__wrapper">
                <div class="row">
                    <?php foreach (ARR_S_3 as $i => $service) :?>
                    <a class="col-6 col-lg-3 mb-4 mb-lg-5 text-decoration-none px-1 px-lg-2" href="#">
                        <div class="card-service h-100">
                            <div class="mb-1">
                                <img class="w-100" src="<?= URL_STORAGE.$service['img'] ?>" alt="<?= $service['img'] ?>">
                            </div>
                            <div class="name-service text-uppercase d-flex align-item-center justify-content-center text-blue fw-bold text-center p-1 p-lg-2"><?= $service['name'] ?></div>
                        </div>
                    </a>
                    <?php endforeach ?>
                </div>
            </div>
        </div>

        <div class="browse__inner">
            <div class="text-center mb-4">
                <h2 class="ff-main browse__title fw-bold h2 text-blue text-uppercase">Cho thuê thiết bị sự kiện</h2>
            </div>
            <div class="browse__wrapper">
                <div class="row">
                    <?php foreach (ARR_S_4 as $i => $service) :?>
                    <a class="col-6 col-lg-3 mb-4 mb-lg-5 text-decoration-none px-1 px-lg-2" href="#">
                        <div class="card-service h-100">
                            <div class="mb-1">
                                <img class="w-100" src="<?= URL_STORAGE.$service['img'] ?>" alt="<?= $service['img'] ?>">
                            </div>
                            <div class="name-service text-uppercase d-flex align-item-center justify-content-center text-blue fw-bold text-center p-1 p-lg-2"><?= $service['name'] ?></div>
                        </div>
                    </a>
                    <?php endforeach ?>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- Section Project -->
<div class="container-fluid bg-blue">
    <div class="container text-center px-lg-5 py-5">
        <div class="mb-3 mb-lg-5">
            <h1 class="ff-main fw-bold text-uppercase text-blue">
                Các dự án của THD
            </h1>
            <p class="mt-3">
                THD sẽ không ngừng nỗ lực để tạo nên sự kiện nổi bật.
            </p>
            <a href="#" class="btn btn-lg btn-outline-blue rounded-4 text-uppercase">
                Xem tất cả dự án
            </a>
        </div>

        
<div class="section categories">
    <div class="categories__center center">
        <div class="categories__inner">
            <div class="categories__wrapper">
                <div class="categories__slider js-slider-categories">
                    <?php foreach (ARR_P as $i => $project) : ?>

                    <a class="categories__item bg-light nav-link" href="#">
                        <div class="video-container">
                            <iframe 
                                class="rounded-bottom-0"
                                src="<?= $project['video'] ?>" 
                                frameborder="0" 
                                allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                                allowfullscreen>
                            </iframe>
                        </div>
                        <div class="px-3 py-2">
                            <div class="categories__subtitle">
                                <?= $project['title'] ?>
                            </div>
                            <div class="categories__content">
                                <?= $project['desc'] ?>
                            </div>
                        </div>
                    </a>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
    </div>
</div>
    </div>
</div>

<!-- Section Brand Customers -->
<div class="container-fluid text-center">
    <div class="container">
        <div class="row">
            <div class="col-12 h1 ff-main text-uppercase text-blue fw-bold py-3">
                Khách hàng tiêu biểu
            </div>
            <?php foreach (ARR_B_C as $i => $brand) : ?>
            <div class="col-4 col-lg-2 my-auto px-0 pb-3">
                <img src="<?= URL_STORAGE.$brand['img'] ?>" alt="<?= $brand['img'] ?>" class="w-50 img-brand-customer">
            </div>
            <?php endforeach ?>
        </div>
    </div>
</div>

<!-- Section Brand Partners -->
<div class="py-3">
    <div class="col-12 h1 py-3 ff-main fw-bold text-center text-uppercase text-blue">
        Đối tác tiêu biểu
    </div>
    <div class="container-fluid bg-blue">
        <div id="running_banner" class="bg-blue px-3">
        <?php foreach (ARR_B_P as $i => $brand) : ?>
            <img src="<?= URL_STORAGE.$brand['img'] ?>" alt="<?= $brand['img'] ?>" width="120px" class="">
        <?php endforeach ?>
        </div>
    </div>
</div>

<!-- Section Feedback -->
<div class="container-fluid py-5">
    <div class="container px-0">
        <div class="travel__head mb-3">
            <h2 class="travel__title ff-main fw-bold h2 text-uppercase text-blue">Khách hàng nói về chúng tôi</h2>
            <div class="travel__info ff-main info">Niềm tin được xây dựng từ sự trải nghiệm</div>
        </div>
        
        <div id="carouselFeedback" class="carousel slide mt-lg-5" data-bs-ride="carousel">
            <div class="carousel-inner">
                <?php foreach (ARR_F as $i => $feedback) : ?>
                <div class="carousel-item <?= $i == 0 ? 'active' : '' ?>"  data-bs-interval="4000">
                    <div class="row px-lg-3 px-2">
                        <?php foreach ($feedback as $card) : ?>
                            <div class="col-12 col-lg-4 p-2">
                                <div class="bg-light rounded-3 p-3 card-feedback">
                                    <div class="d-flex align-items-center">
                                        <img class="rounded-circle me-3" width="40" src="<?= URL_STORAGE . $card['avatar'] ?>" alt="">
                                        <div class="">
                                            <div class="fw-bold">
                                                <?= $card['name'] ?>
                                            </div>
                                            <div class="small fw-light d-flex align-items-center gap-2">
                                                <img width="40" src="<?= URL_STORAGE.$card['brand'] ?>" alt="<?= $card['brand'] ?>">
                                                <?= $card['name_brand'] ?>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <p class="small text-muted">
                                        <?= $card['content'] ?>
                                    </p>
                                </div>
                            </div>
                        <?php endforeach ?>
                    </div>
                </div>
                <?php endforeach ?>
            </div>
        </div>
        <div class="d-flex justify-content-center align-items-center gap-3">
            <button class="btn-outline-light rounded-circle" type="button" data-bs-target="#carouselFeedback" data-bs-slide="prev">
                <i class="bi bi-arrow-left fs-4 text-muted"></i>
            </button>
            <button class="btn-outline-light rounded-circle" type="button" data-bs-target="#carouselFeedback" data-bs-slide="next">
                <i class="bi bi-arrow-right fs-4 text-muted"></i>
            </button>
        </div>
    </div>
</div>