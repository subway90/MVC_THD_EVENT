<!-- Section Hero -->
<div class="container-fluid p-0">
    <div id="carouselSlideBanner" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner position-relative border-bottom">
            <?php foreach (SLIDE_BANNER as $i => $slide): ?>
                <div class="carousel-item <?= $i == 0 ? 'active' : '' ?>" data-bs-interval="5500">
                    <img src="<?= URL_STORAGE . $slide['img'] ?>" alt="<?= $slide['img'] ?>" class="w-100 img-banner">
                </div>
            <?php endforeach ?>

            <div class="position-absolute w-100 h-100 d-flex flex-column justify-content-end align-items-center">

                <div class="d-flex justify-content-center align-items-center gap-3">
                    <button class="btn-outline-light rounded-circle" type="button" data-bs-target="#carouselSlideBanner"
                        data-bs-slide="prev">
                        <i class="bi bi-arrow-left fs-4 text-blue"></i>
                    </button>
                    <button class="btn-outline-light rounded-circle" type="button" data-bs-target="#carouselSlideBanner"
                        data-bs-slide="next">
                        <i class="bi bi-arrow-right fs-4 text-blue"></i>
                    </button>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- Section Breadcrumb -->
<div class="container-fluid p-0 py-3 py-lg-5">
    <div class="container d-flex flex-column flex-lg-row justify-content-between align-items-center">
        <a href="/" class="btn btn-outline-blue rounded-4 px-3">
            <i class="bi bi-chevron-left small me-1"></i>
            Về trang chủ
        </a>

        <div class="d-flex align-items-center gap-2 mt-3 mt-lg-0">
            <a href="/" class="nav-link text-blue fw-bold">
                Trang chủ
            </a>
            <i class="bi bi-chevron-right icon-breadrumb text-muted"></i>
            <a href="#" class="nav-link text-muted disabled fw-bold">
                Địa điểm nổi bật
            </a>
        </div>
    </div>
</div>

<!-- Section List -->
<div class="section travels">
    <div class="travels__center center">
        <div class="py-2 container">
            <h2 class="travels__title h2 ff-main fw-bold">Địa điểm nổi bật</h2>
            <div class="travels__info info ff-main">Khám phá các địa điểm nổi bật cùng THD</div>
            <div class="travels__sorting">
                <div class="nav">
                    <a class="nav__link active" href="<?= URL ?>/dia-diem-noi-bat/mien-bac">
                        Miền Bắc
                    </a>
                    <a class="nav__link" href="<?= URL ?>/dia-diem-noi-bat/mien-trung">
                        Miền Trung
                    </a>
                    <a class="nav__link" href="<?= URL ?>/dia-diem-noi-bat/mien-nam">
                        Miền Nam
                    </a>
                </div>
                
            </div>
            <div class="travels__list row px-0">
                <?php foreach (ARR_HOT_PLACE as $i => $card) : ?>
                <div class="text-decoration-none col-6 col-lg-3 mb-3">
                    <div class="travels__card w-100">
                        <div class="travels__preview">
                            <img src="<?= URL_STORAGE.$card['img'] ?>" alt="Card">
                        </div>
                        <div class="travels__body">
                            <div class="travels__line d-flex flex-column p-3">
                                <div class="travels__details">
                                    <div class="travels__subtitle"><?= $card['name'] ?></div>
                                    <div class="travels__location"><?= $card['desc'] ?></div>
                                </div>
                                <div class="d-flex flex-column flex-lg-row w-100 gap-lg-2">
                                    <a href="<?= URL ?>chi-tiet-dia-diem-noi-bat" class="travels__price text-decoration-none">
                                        <div class="travels__actual">Khám phá</div>
                                    </a>
                                    <div class="d-flex justify-content-between gap-2">
                                        <button class="travels__price__blue w-100" for="hotPlace<?= $i ?>">
                                            <div class="travels__actual">Chọn</div>
                                        </button>
                                        
                                        <div class="travels__check">
                                            <input class="checkbox-compare"
                                            type="checkbox" 
                                            id="hotPlace<?= $i ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach ?>
            </div>
            <div class="text-center py-3 py-lg-5">
                <button class="btn btn-outline-blue">
                    So sánh
                </button>
            </div>
        </div>
    </div>
</div>