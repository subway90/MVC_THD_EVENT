<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?= $title ? $title.' | '.WEB_NAME : WEB_NAME ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <link rel="apple-touch-icon" sizes="180x180" href="<?= WEB_FAVICON ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= WEB_FAVICON ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= WEB_FAVICON ?>">
    <link rel="manifest" href="<?= URL_STORAGE ?>/system/site.webmanifest">
    <link rel="mask-icon" href="<?= URL_STORAGE ?>/system/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <meta name="description" content="<?= WEB_DESCRIPTION ?>">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@ui8">
    <meta name="twitter:title" content="<?= WEB_DESCRIPTION ?>">
    <meta name="twitter:description" content="<?= WEB_DESCRIPTION ?>">
    <meta name="twitter:creator" content="@ui8">
    <meta property="og:title" content="<?= WEB_DESCRIPTION ?>">
    <meta property="og:description" content="<?= WEB_DESCRIPTION ?>">
    <meta property="og:site_name" content="<?= WEB_DESCRIPTION ?>">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@700&amp;family=Poppins:wght@400;500;600;700&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" media="all" href="<?= URL ?>assets/css/main.css">
    <!-- CDN Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
    <!-- Bootstrap Icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.3/font/bootstrap-icons.min.css">
    <!-- Fontawesome Icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <!-- SDK Facebook -->
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v9.0" nonce="YOUR_NONCE"></script>
    <script>
        var viewportmeta = document.querySelector('meta[name="viewport"]');
        if (viewportmeta) {
            if (screen.width < 375) {
                var newScale = screen.width / 375;
                viewportmeta.content = 'width=375, minimum-scale=' + newScale + ', maximum-scale=1.0, user-scalable=no, initial-scale=' + newScale + '';
            } else {
                viewportmeta.content = 'width=device-width, maximum-scale=1.0, initial-scale=1.0';
            }
        }
    </script>
</head>

<body>
    <script>
        console.log(localStorage.getItem('darkMode'));
        if (localStorage.getItem('darkMode') === "on") {
            document.body.classList.add("dark");
            document.addEventListener("DOMContentLoaded", function () {
                document.querySelector('.js-theme input').checked = true;
            });
        }
    </script>
    <!-- outer-->
    <div class="outer">
        <!-- header-->
        <header class="header js-header authorization fixed-top border-bottom shadow">
            <div class="header__center center">
                <a class="header__logo" href="<?= URL ?>">
                    <img class="some-icon" src="<?= WEB_LOGO ?>" alt="Fleet">
                    <img class="some-icon-dark" src="<?= WEB_LOGO ?>" alt="Fleet">
                </a>
                <div class="header__wrapper js-header-wrapper gap-3">
                    <div class="header__item header__item_dropdown js-header-item">
                        <a class="header__item nav-link link-dark text-uppercase" href="#">Giới thiệu</a>
                    </div>
                    <div class="header__item header__item_dropdown js-header-item">
                        <button class="header__head js-header-head text-uppercase">
                            Tổ Chức Sự Kiện
                            <svg class="icon icon-arrow-down">
                                <use xlink:href="#icon-arrow-down"></use>
                            </svg>
                        </button>
                        <a class="d-lg-none header__item nav-link link-dark text-uppercase" href="#">Tổ Chức Sự Kiện</a>
                        <div class="header__body js-header-body">
                            <div class="header__menu">
                                <?php foreach (ARR_S_1 as $service) : ?>
                                <a class="header__link text-uppercase text-nowrap" href="#">
                                    <?= $service['name'] ?>
                                </a>
                                <?php endforeach ?>
                            </div>
                        </div>
                    </div>
                    <div class="header__item header__item_dropdown js-header-item">
                        <button class="header__head js-header-head text-uppercase">
                            Tổ Chức Team Building
                            <svg class="icon icon-arrow-down">
                                <use xlink:href="#icon-arrow-down"></use>
                            </svg>
                        </button>
                        <a class="d-lg-none header__item nav-link link-dark text-uppercase" href="#">Tổ Chức Team Building</a>
                        <div class="header__body js-header-body">
                            <div class="header__menu">
                                <?php foreach (ARR_S_2 as $service) : ?>
                                <a class="header__link text-uppercase text-nowrap" href="#">
                                    <?= $service['name'] ?>
                                </a>
                                <?php endforeach ?>
                            </div>
                        </div>
                    </div>
                    <div class="header__item header__item_dropdown js-header-item">
                        <button class="header__head js-header-head text-uppercase">
                            Nhân Sự Sự Kiện
                            <svg class="icon icon-arrow-down">
                                <use xlink:href="#icon-arrow-down"></use>
                            </svg>
                        </button>
                        <a class="d-lg-none header__item nav-link link-dark text-uppercase" href="#">Nhân Sự Sự Kiện</a>
                        <div class="header__body js-header-body">
                            <div class="header__menu">
                                <?php foreach (ARR_S_3 as $service) : ?>
                                <a class="header__link text-uppercase text-nowrap" href="#">
                                    <?= $service['name'] ?>
                                </a>
                                <?php endforeach ?>
                            </div>
                        </div>
                    </div>
                    <div class="header__item header__item_dropdown js-header-item">
                        <button class="header__head js-header-head text-uppercase">
                            Thiết Bị Sự Kiện
                            <svg class="icon icon-arrow-down">
                                <use xlink:href="#icon-arrow-down"></use>
                            </svg>
                        </button>
                        <a class="d-lg-none header__item nav-link link-dark text-uppercase" href="#">Thiết Bị Sự Kiện</a>
                        <div class="header__body js-header-body">
                            <div class="header__menu">
                                <?php foreach (ARR_S_4 as $service) : ?>
                                <a class="header__link text-uppercase text-nowrap" href="#">
                                    <?= $service['name'] ?>
                                </a>
                                <?php endforeach ?>
                            </div>
                        </div>
                    </div>
                    <div class="header__item header__item_dropdown js-header-item">
                        <a class="header__item nav-link link-dark text-uppercase" href="/dia-diem-noi-bat">Địa Điểm Nổi Bật</a>
                    </div>
                    <div class="header__item header__item_dropdown js-header-item">
                        <a class="header__item nav-link link-dark text-uppercase" href="#">Dự án</a>
                    </div>
                    <div class="header__item header__item_dropdown js-header-item">
                        <a class="header__item nav-link link-dark text-uppercase" href="#">Tin Tức</a>
                    </div>
                    <div class="header__item header__item_dropdown js-header-item">
                        <a class="header__item nav-link link-dark text-uppercase" href="#">Liên Hệ</a>
                    </div>
                </div>
                <button class="header__burger js-header-burger"></button>
            </div>
        </header>

        <!-- Section Hero -->
        <div class="container-fluid p-0 position-relative">
            <div id="carouselSlideBanner" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <?php foreach (SLIDE_BANNER as $i => $slide): ?>
                        <div class="carousel-item <?= $i == 0 ? 'active' : '' ?>" data-bs-interval="5500">
                            <img src="<?= URL_STORAGE . $slide['img'] ?>" alt="<?= $slide['img'] ?>" class="w-100 img-banner">
                        </div>
                    <?php endforeach ?>
                </div>
                <div class="carousel-indicators position-relative px-0 pt-1 pt-lg-2 gap-1">
                    <button class="active" type="button" data-bs-target="#carouselSlideBanner" data-bs-slide-to="0" aria-current="true" aria-label="Slide 1"></button>
                    <button class="" type="button" data-bs-target="#carouselSlideBanner" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button class="" type="button" data-bs-target="#carouselSlideBanner" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
            </div>
        </div>