<!-- outer content-->
<div class="outer__inner">
    <!-- Section Hero -->
    <div class="container-fluid section-hero position-relative p-0">
        <div class="position-absolute bg-dark bg-opacity-25 w-100 h-100 d-flex flex-column justify-content-end align-items-center pb-4">
            <div class="d-flex align-items-center justify-content-center">
                <span id="slogan" class="line-slogan"></span>
            </div>
        </div>
    </div>

    <!-- Section Introduce Company -->
    <div class="container-fluid px-0 bg-blue d-flex justify-content-center">
        <div class="container row py-5 gap-lg-5">
            <div class="col-12 col-lg-6">
                <iframe 
                    width="100%" 
                    height="360" 
                    src="https://www.youtube.com/embed/1mpVYOFG4YA?autoplay=1&mute=1" 
                    frameborder="0" 
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                    allowfullscreen>
                </iframe>
            </div>
            <div class="col-12 col-lg-5 ff-main d-flex flex-column align-items-center align-items-center align-items-lg-start justify-content-between ps-lg-6">
                <div class="text-center text-lg-start">
                    <h4 class="fw-bold">
                        THD EVENT
                    </h4>
                    <h4 class="fw-bold">
                        Tổ chức sự kiện chuyên nghiệp uy tín
                    </h4>
                    <p class="mt-3">
                        THD Event là đơn vị chuyên hoạt động trong lĩnh vực tổ chức sự kiện, hội nghị, hội thảo, teambuilding… cung cấp thiết bị sự kiện, nhân sự sự kiện cao cấp. Với hơn 8 năm kinh nghiệm cùng hàng trăm sự kiện đa dạng, chúng tôi tự hào mang đến giải pháp toàn diện – từ ý tưởng đến hiện thực.
                    </p>
                    
                    <p class="mt-3">
                        Cam kết "Không ngừng vươn tới đỉnh cao – Kiến tạo giá trị bền vững", THD Travel & Event chính là đối tác lý tưởng cho những trải nghiệm ấn tượng và khác biệt. Hãy cùng chúng tôi biến mọi khoảnh khắc thành tuyệt tác!
                    </p>
                </div>
                <a href="#" class="btn btn-outline-blue col-12 col-lg-6 mb-lg-3">
                    Về chúng tôi
                </a>
            </div>
        </div>
    </div>

    <!-- Section Service -->
    <div class="section browse">
        <div class="browse__center center">
            <div class="py-5 text-center">
                <h1 class="ff-main fw-bold">
                    Dịch vụ của chúng tôi
                </h1>
                <div class="fs-5">
                    Đồng hành cùng doanh nghiệp trong từng dấu mốc quan trọng
                </div>
            </div>
            <div class="browse__inner">
                <div class="text-center mb-4">
                    <h2 class="ff-main browse__title fw-bold h2">Tổ chức sự kiện</h2>
                </div>
                <div class="browse__wrapper">
                    <div class="row">
                        <?php foreach (ARR_S_1 as $i => $service) :?>
                        <a class="col-6 col-lg-3 mb-2 mb-lg-5 link-blue" href="stays-category.html">
                            <div class="browse__preview">
                                <img class="w-100" src="<?= URL_STORAGE.$service['img'] ?>" alt="<?= $service['img'] ?>">
                            </div>
                            <div class="browse__subtitle text-center"><?= $service['name'] ?></div>
                        </a>
                        <?php endforeach ?>
                    </div>
                </div>
            </div>

            <div class="browse__inner">
                <div class="text-center mb-4">
                    <h2 class="ff-main browse__title fw-bold h2">Tổ chức team building</h2>
                </div>
                <div class="browse__wrapper">
                    <div class="row">
                        <?php foreach (ARR_S_2 as $i => $service) :?>
                        <a class="col-6 col-lg-3 mb-2 mb-lg-5 link-blue" href="stays-category.html">
                            <div class="browse__preview">
                                <img class="w-100" src="<?= URL_STORAGE.$service['img'] ?>" alt="<?= $service['img'] ?>">
                            </div>
                            <div class="browse__subtitle text-center"><?= $service['name'] ?></div>
                        </a>
                        <?php endforeach ?>
                    </div>
                </div>
            </div>

            <div class="browse__inner">
                <div class="text-center mb-4">
                    <h2 class="ff-main browse__title fw-bold h2">Thuê nhân sự sự kiện</h2>
                </div>
                <div class="browse__wrapper">
                    <div class="row">
                        <?php foreach (ARR_S_3 as $i => $service) :?>
                        <a class="col-6 col-lg-3 mb-2 mb-lg-5 link-blue" href="stays-category.html">
                            <div class="browse__preview">
                                <img class="w-100" src="<?= URL_STORAGE.$service['img'] ?>" alt="<?= $service['img'] ?>">
                            </div>
                            <div class="browse__subtitle text-center"><?= $service['name'] ?></div>
                        </a>
                        <?php endforeach ?>
                    </div>
                </div>
            </div>

            <div class="browse__inner">
                <div class="text-center mb-4">
                    <h2 class="ff-main browse__title fw-bold h2">Cho thuê thiết bị sự kiện</h2>
                </div>
                <div class="browse__wrapper">
                    <div class="row">
                        <?php foreach (ARR_S_4 as $i => $service) :?>
                        <a class="col-6 col-lg-3 mb-2 mb-lg-5 link-blue" href="stays-category.html">
                            <div class="browse__preview">
                                <img class="w-100" src="<?= URL_STORAGE.$service['img'] ?>" alt="<?= $service['img'] ?>">
                            </div>
                            <div class="browse__subtitle text-center"><?= $service['name'] ?></div>
                        </a>
                        <?php endforeach ?>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Section Project -->
    <div class="container-fluid bg-blue">
        <div class="container py-5">
            <div class="mb-3">
                <h1 class="ff-main fw-bold text-uppercase">
                    Các dự án của THD
                </h1>
                <p class="mt-3">
                    THD sẽ không ngừng nỗ lực để tạo nên sự kiện nổi bật.
                </p>
                <a href="#" class="btn btn-lg btn-outline-blue rounded-0 text-uppercase">
                    Xem tất cả dự án
                </a>
            </div>

            <div id="carouselProject" class="carousel slide mt-lg-5" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <?php foreach (ARR_P as $i => $project) : ?>
                    <div class="carousel-item <?= $i == 0 ? 'active' : '' ?>"  data-bs-interval="2000">
                        <div class="d-flex flex-column flex-lg-row">
                            <div class="col-12 col-lg-3 d-flex flex-column justify-content-between bg-light p-3">
                                <div class="">
                                    <h5 class="fw-bold ff-main">
                                        Nơi hội tụ tinh hoa đất trời
                                    </h5>
                                    <h2 class="text-blue text-uppercase py-3">
                                        tour Phú Quốc
                                    </h2>
                                    <p class="ff-main">
                                        Phú Quốc is a Vietnamese island off the coast of Cambodia in the Gulf of Thailand. It's known for white-sand beaches and resorts, most of which are along the palm-lined southwest coast.
                                    </p>
                                </div>
                                <a href="#" class="mt-2 fw-bold nav-link text-blue text-uppercase">
                                    Khám phá dự án
                                </a>
                            </div>
                            <div class="col-12 col-lg-9">
                                <img src="<?= URL_STORAGE ?>project/project_1.png" class="d-block w-100" alt="image">
                            </div>
                        </div>
                    </div>
                    <?php endforeach ?>
                </div>
            </div>
            <div class="d-flex justify-content-center align-items-center gap-3 mt-3">
                <button class="btn-outline-light rounded-circle" type="button" data-bs-target="#carouselProject" data-bs-slide="prev">
                   <i class="bi bi-arrow-left fs-4 text-muted"></i>
                </button>
                <button class="btn-outline-light rounded-circle" type="button" data-bs-target="#carouselProject" data-bs-slide="next">
                   <i class="bi bi-arrow-right fs-4 text-muted"></i>
                </button>
            </div>
        </div>
    </div>

    <!-- Section Brand Customers -->
    <div class="container-fluid text-center">
        <div class="container">
            <div class="row">
                <div class="col-12 h1 ff-main fw-bold py-3">
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
        <div class="col-12 h1 py-3 ff-main fw-bold text-center">
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
    <div class="section travel mb-0 py-3">
        <div class="travel__center center">
            <div class="travel__head">
                <h2 class="travel__title ff-main fw-bold h2">Khách hàng nói về chúng tôi</h2>
                <div class="travel__info ff-main info">Niềm tin được xây dựng từ sự trải nghiệm</div>
            </div>
            <div class="travel__row">
                <div class="travel__col">
                    <div class="travel__list">
                        <div class="travel__item">
                            <div class="travel__number" style="background-color: #8BC5E5;">01</div>
                            <div class="travel__subtitle">Tìm chuyến đi phù hợp với lối sống linh hoạt</div>
                            <div class="travel__content">Stacks is a production-ready library of stackable content blocks built in React Native</div>
                        </div>
                        <div class="travel__item">
                            <div class="travel__number" style="background-color: #92A5EF;">02</div>
                            <div class="travel__subtitle">Du lịch với sự tự tin hơn</div>
                            <div class="travel__content">Stacks is a production-ready library of stackable content blocks built in React Native</div>
                        </div>
                        <div class="travel__item">
                            <div class="travel__number" style="background-color: #58C27D;">03</div>
                            <div class="travel__subtitle">Xem những gì thực sự được bao gồm</div>
                            <div class="travel__content">Stacks is a production-ready library of stackable content blocks built in React Native</div>
                        </div>
                    </div>
                </div>
                <div class="travel__col">
                    <div class="travel__wrapper">
                    <div class="travel__slider js-slider-travel">
                        <div class="travel__gallery">
                        <div class="travel__bg"><img srcSet="<?= URL_STORAGE ?>content/travel-pic-1@2x.jpg 2x"
                            src="<?= URL_STORAGE ?>content/travel-pic-1.jpg" alt="Travel"></div>
                        <div class="travel__group">
                            <div class="travel__preview"><img class="some-icon" srcSet="<?= URL_STORAGE ?>content/appraisal-pic-1@2x.png 2x"
                                src="<?= URL_STORAGE ?>content/appraisal-pic-1.png" alt="Appraisal"><img class="some-icon-dark"
                                srcSet="<?= URL_STORAGE ?>content/appraisal-pic-dark-1@2x.png 2x" src="<?= URL_STORAGE ?>content/appraisal-pic-dark-1.png"
                                alt="Appraisal"></div>
                            <div class="travel__preview"><img class="some-icon" srcSet="<?= URL_STORAGE ?>content/appraisal-pic-1@2x.png 2x"
                                src="<?= URL_STORAGE ?>content/appraisal-pic-1.png" alt="Appraisal"><img class="some-icon-dark"
                                srcSet="<?= URL_STORAGE ?>content/appraisal-pic-dark-1@2x.png 2x" src="<?= URL_STORAGE ?>content/appraisal-pic-dark-1.png"
                                alt="Appraisal"></div>
                            <div class="travel__preview"><img class="some-icon" srcSet="<?= URL_STORAGE ?>content/appraisal-pic-1@2x.png 2x"
                                src="<?= URL_STORAGE ?>content/appraisal-pic-1.png" alt="Appraisal"><img class="some-icon-dark"
                                srcSet="<?= URL_STORAGE ?>content/appraisal-pic-dark-1@2x.png 2x" src="<?= URL_STORAGE ?>content/appraisal-pic-dark-1.png"
                                alt="Appraisal"></div>
                        </div>
                        </div>
                        <div class="travel__gallery">
                        <div class="travel__bg"><img srcSet="<?= URL_STORAGE ?>content/travel-pic-1@2x.jpg 2x"
                            src="<?= URL_STORAGE ?>content/travel-pic-1.jpg" alt="Travel"></div>
                        <div class="travel__group">
                            <div class="travel__preview"><img class="some-icon" srcSet="<?= URL_STORAGE ?>content/appraisal-pic-1@2x.png 2x"
                                src="<?= URL_STORAGE ?>content/appraisal-pic-1.png" alt="Appraisal"><img class="some-icon-dark"
                                srcSet="<?= URL_STORAGE ?>content/appraisal-pic-dark-1@2x.png 2x" src="<?= URL_STORAGE ?>content/appraisal-pic-dark-1.png"
                                alt="Appraisal"></div>
                            <div class="travel__preview"><img class="some-icon" srcSet="<?= URL_STORAGE ?>content/appraisal-pic-1@2x.png 2x"
                                src="<?= URL_STORAGE ?>content/appraisal-pic-1.png" alt="Appraisal"><img class="some-icon-dark"
                                srcSet="<?= URL_STORAGE ?>content/appraisal-pic-dark-1@2x.png 2x" src="<?= URL_STORAGE ?>content/appraisal-pic-dark-1.png"
                                alt="Appraisal"></div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>