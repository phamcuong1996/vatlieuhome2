<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <title>Stroyka</title>
    <link rel="icon" type="image/png" href="/fe/HTML/default/images/favicon.png">
    <!-- fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i">
    <!-- css -->
    <link rel="stylesheet" href="/fe/HTML/default/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/fe/HTML/default/vendor/owl-carousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="/fe/HTML/default/vendor/photoswipe/photoswipe.css">
    <link rel="stylesheet" href="/fe/HTML/default/vendor/photoswipe/default-skin/default-skin.css">
    <link rel="stylesheet" href="/fe/HTML/default/vendor/select2/css/select2.min.css">
    <link rel="stylesheet" href="/fe/HTML/default/css/style.css">
    <!-- font - fontawesome -->
    <link rel="stylesheet" href="/fe/HTML/default/vendor/fontawesome/css/all.min.css">
    <!-- font - stroyka -->
    <link rel="stylesheet" href="/fe/HTML/default/fonts/stroyka/stroyka.css">
</head>

<body>
<!-- site -->
<div class="site">
    <header class="site__header d-lg-block d-none">
        <div class="site-header">
            <!-- .topbar -->
            <div class="site-header__topbar topbar">
                <div class="topbar__container container">

                </div>
            </div>
            <!-- .topbar / end -->
            <div class="site-header__nav-panel">
                <!-- data-sticky-mode - one of [pullToShow, alwaysOnTop] -->
                <div class="nav-panel nav-panel--sticky" data-sticky-mode="pullToShow">
                    <div class="nav-panel__container container">
                        <div class="nav-panel__row">
                            <div class="nav-panel__departments">
                                <!-- .departments -->
                                <div class="departments  departments--open departments--fixed " data-departments-fixed-by=".block-slideshow">
                                    <div class="departments__body">
                                        <div class="departments__links-wrapper">
                                            <div class="departments__submenus-container"></div>
                                            <ul class="departments__links">
                                                @foreach($categories as $sach)
                                                <li class="departments__item">
                                                    <a class="departments__item-link" href="">
                                                        {{$sach->name}}
                                                        <svg class="departments__item-arrow" width="6px" height="9px">
                                                            <use xlink:href="/fe/HTML/default/images/sprite.svg#arrow-rounded-right-6x9"></use>
                                                        </svg>
                                                    </a>
                                                    <div class="departments__submenu departments__submenu--type--megamenu departments__submenu--size--xl">
                                                        <!-- .megamenu -->
                                                        <div class="megamenu  megamenu--departments ">
                                                            <div class="megamenu__body" style="background-image: url('/fe/HTML/default/images/megamenu/megamenu-1.jpg');">
                                                                <div class="row">
                                                                    <div class="col-3">
                                                                        <ul class="megamenu__links megamenu__links--level--0">
                                                                            @foreach($cat1 as $value)
                                                                            <li class="megamenu__item ">
                                                                                <a href="">{{$value->name}}</a>
                                                                            </li>
                                                                            @endforeach
                                                                        </ul>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- .megamenu / end -->
                                                    </div>
                                                </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                    <button class="departments__button">
                                        <svg class="departments__button-icon" width="18px" height="14px">
                                            <use xlink:href="/fe/HTML/default/images/sprite.svg#menu-18x14"></use>
                                        </svg>
                                        Danh Mục Sản Phẩm
                                        <svg class="departments__button-arrow" width="9px" height="6px">
                                            <use xlink:href="/fe/HTML/default/images/sprite.svg#arrow-rounded-down-9x6"></use>
                                        </svg>
                                    </button>
                                </div>
                                <!-- .departments / end -->
                            </div>
                            <!-- .nav-links -->
                            <div class="nav-panel__nav-links nav-links">
                                <ul class="nav-links__list">
                                    <li class="nav-links__item ">
                                        <a class="nav-links__item-link" href="https://themeforest.net/item/stroyka-tools-store-html-template/23326943">
                                            <div class="nav-links__item-body">
                                                Giới Thiệu
                                            </div>
                                        </a>
                                    </li>
                                    <li class="nav-links__item ">
                                        <a class="nav-links__item-link" href="https://themeforest.net/item/stroyka-tools-store-html-template/23326943">
                                            <div class="nav-links__item-body">
                                                Hệ Thống Đại Lý
                                            </div>
                                        </a>
                                    </li>
                                    <li class="nav-links__item ">
                                        <a class="nav-links__item-link" href="https://themeforest.net/item/stroyka-tools-store-html-template/23326943">
                                            <div class="nav-links__item-body">
                                                Chính Sách
                                            </div>
                                        </a>
                                    </li>
                                    <li class="nav-links__item ">
                                        <a class="nav-links__item-link" href="https://themeforest.net/item/stroyka-tools-store-html-template/23326943">
                                            <div class="nav-links__item-body">
                                                Giải Pháp - Ý Tưởng
                                            </div>
                                        </a>
                                    </li>
                                    <li class="nav-links__item ">
                                        <a class="nav-links__item-link" href="https://themeforest.net/item/stroyka-tools-store-html-template/23326943">
                                            <div class="nav-links__item-body">
                                                Danh Mục Bài Viết
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- .nav-links / end -->
                            <div class="nav-panel__indicators">
                                <div class="indicator">
                                    <a href="{{route('carts.index')}}" class="indicator__button">
                                            <span class="indicator__area">
                                                <svg width="20px" height="20px">
                                                    <use xlink:href="/fe/HTML/default/images/sprite.svg#cart-20"></use>
                                                </svg>
                                            </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="main-content">
        @yield('content')
    </div>
    <footer class="site__footer">
        <div class="site-footer">
            <div class="container">
                <div class="site-footer__widgets">
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="site-footer__widget footer-contacts">
                                <h5 class="footer-contacts__title">Contact Us</h5>
                                <div class="footer-contacts__text">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer in feugiat lorem. Pellentque ac placerat tellus.
                                </div>
                                <ul class="footer-contacts__contacts">
                                    <li><i class="footer-contacts__icon fas fa-globe-americas"></i> 715 Fake Street, New York 10021 USA</li>
                                    <li><i class="footer-contacts__icon far fa-envelope"></i> stroyka@example.com</li>
                                    <li><i class="footer-contacts__icon fas fa-mobile-alt"></i> (800) 060-0730, (800) 060-0730</li>
                                    <li><i class="footer-contacts__icon far fa-clock"></i> Mon-Sat 10:00pm - 7:00pm</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6 col-md-3 col-lg-2">
                            <div class="site-footer__widget footer-links">
                                <h5 class="footer-links__title">Information</h5>
                                <ul class="footer-links__list">
                                    <li class="footer-links__item"><a href="" class="footer-links__link">About Us</a></li>
                                    <li class="footer-links__item"><a href="" class="footer-links__link">Delivery Information</a></li>
                                    <li class="footer-links__item"><a href="" class="footer-links__link">Privacy Policy</a></li>
                                    <li class="footer-links__item"><a href="" class="footer-links__link">Brands</a></li>
                                    <li class="footer-links__item"><a href="" class="footer-links__link">Contact Us</a></li>
                                    <li class="footer-links__item"><a href="" class="footer-links__link">Returns</a></li>
                                    <li class="footer-links__item"><a href="" class="footer-links__link">Site Map</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6 col-md-3 col-lg-2">
                            <div class="site-footer__widget footer-links">
                                <h5 class="footer-links__title">My Account</h5>
                                <ul class="footer-links__list">
                                    <li class="footer-links__item"><a href="" class="footer-links__link">Store Location</a></li>
                                    <li class="footer-links__item"><a href="" class="footer-links__link">Order History</a></li>
                                    <li class="footer-links__item"><a href="" class="footer-links__link">Wish List</a></li>
                                    <li class="footer-links__item"><a href="" class="footer-links__link">Newsletter</a></li>
                                    <li class="footer-links__item"><a href="" class="footer-links__link">Specials</a></li>
                                    <li class="footer-links__item"><a href="" class="footer-links__link">Gift Certificates</a></li>
                                    <li class="footer-links__item"><a href="" class="footer-links__link">Affiliate</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-12 col-md-12 col-lg-4">
                            <div class="site-footer__widget footer-newsletter">
                                <h5 class="footer-newsletter__title">Newsletter</h5>
                                <div class="footer-newsletter__text">
                                    Praesent pellentesque volutpat ex, vitae auctor lorem pulvinar mollis felis at lacinia.
                                </div>
                                <form action="" class="footer-newsletter__form">
                                    <label class="sr-only" for="footer-newsletter-address">Email Address</label>
                                    <input type="text" class="footer-newsletter__form-input form-control" id="footer-newsletter-address" placeholder="Email Address...">
                                    <button class="footer-newsletter__form-button btn btn-primary">Subscribe</button>
                                </form>
                                <div class="footer-newsletter__text footer-newsletter__text--social">
                                    Follow us on social networks
                                </div>
                                <!-- social-links -->
                                <div class="social-links footer-newsletter__social-links social-links--shape--circle">
                                    <ul class="social-links__list">
                                        <li class="social-links__item">
                                            <a class="social-links__link social-links__link--type--rss" href="" target="_blank">
                                                <i class="fas fa-rss"></i>
                                            </a>
                                        </li>
                                        <li class="social-links__item">
                                            <a class="social-links__link social-links__link--type--youtube" href="" target="_blank">
                                                <i class="fab fa-youtube"></i>
                                            </a>
                                        </li>
                                        <li class="social-links__item">
                                            <a class="social-links__link social-links__link--type--facebook" href="" target="_blank">
                                                <i class="fab fa-facebook-f"></i>
                                            </a>
                                        </li>
                                        <li class="social-links__item">
                                            <a class="social-links__link social-links__link--type--twitter" href="" target="_blank">
                                                <i class="fab fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="social-links__item">
                                            <a class="social-links__link social-links__link--type--instagram" href="" target="_blank">
                                                <i class="fab fa-instagram"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- social-links / end -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="site-footer__bottom">
                    <div class="site-footer__copyright">
                        <!-- copyright -->
                        Powered by HTML — Design by <a href="https://themeforest.net/user/kos9" target="_blank">Kos</a>
                        <!-- copyright / end -->
                    </div>
                    <div class="site-footer__payments">
                        <img src="/fe/HTML/default/images/payments.png" alt="">
                    </div>
                </div>
            </div>
            <div class="totop">
                <div class="totop__body">
                    <div class="totop__start"></div>
                    <div class="totop__container container"></div>
                    <div class="totop__end">
                        <button type="button" class="totop__button">
                            <svg width="13px" height="8px">
                                <use xlink:href="/fe/HTML/default/images/sprite.svg#arrow-rounded-up-13x8"></use>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- site__footer / end -->
</div>
<!-- site / end -->
<!-- quickview-modal -->
<div id="quickview-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content"></div>
    </div>
</div>
<!-- quickview-modal / end -->
<!-- mobilemenu -->
<div class="mobilemenu">
    <div class="mobilemenu__backdrop"></div>
    <div class="mobilemenu__body">
        <div class="mobilemenu__header">
            <div class="mobilemenu__title">Menu</div>
            <button type="button" class="mobilemenu__close">
                <svg width="20px" height="20px">
                    <use xlink:href="/fe/HTML/default/images/sprite.svg#cross-20"></use>
                </svg>
            </button>
        </div>
        <div class="mobilemenu__content">
            <ul class="mobile-links mobile-links--level--0" data-collapse data-collapse-opened-class="mobile-links__item--open">
                <li class="mobile-links__item" data-collapse-item>
                    <div class="mobile-links__item-title">
                        <a href="index.html" class="mobile-links__item-link">Home</a>
                        <button class="mobile-links__item-toggle" type="button" data-collapse-trigger>
                            <svg class="mobile-links__item-arrow" width="12px" height="7px">
                                <use xlink:href="/fe/HTML/default/images/sprite.svg#arrow-rounded-down-12x7"></use>
                            </svg>
                        </button>
                    </div>
                    <div class="mobile-links__item-sub-links" data-collapse-content>
                        <ul class="mobile-links mobile-links--level--1">
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="index.html" class="mobile-links__item-link">Home 1</a>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="index-2.html" class="mobile-links__item-link">Home 2</a>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="index-3.html" class="mobile-links__item-link">Home 1 Finder</a>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="index-4.html" class="mobile-links__item-link">Home 2 Finder</a>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="offcanvas-cart.html" class="mobile-links__item-link">Offcanvas Cart</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="mobile-links__item" data-collapse-item>
                    <div class="mobile-links__item-title">
                        <a href="" class="mobile-links__item-link">Categories</a>
                        <button class="mobile-links__item-toggle" type="button" data-collapse-trigger>
                            <svg class="mobile-links__item-arrow" width="12px" height="7px">
                                <use xlink:href="/fe/HTML/default/images/sprite.svg#arrow-rounded-down-12x7"></use>
                            </svg>
                        </button>
                    </div>
                    <div class="mobile-links__item-sub-links" data-collapse-content>
                        <ul class="mobile-links mobile-links--level--1">
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="" class="mobile-links__item-link">Power Tools</a>
                                    <button class="mobile-links__item-toggle" type="button" data-collapse-trigger>
                                        <svg class="mobile-links__item-arrow" width="12px" height="7px">
                                            <use xlink:href="/fe/HTML/default/images/sprite.svg#arrow-rounded-down-12x7"></use>
                                        </svg>
                                    </button>
                                </div>
                                <div class="mobile-links__item-sub-links" data-collapse-content>
                                    <ul class="mobile-links mobile-links--level--2">
                                        <li class="mobile-links__item" data-collapse-item>
                                            <div class="mobile-links__item-title">
                                                <a href="" class="mobile-links__item-link">Engravers</a>
                                            </div>
                                        </li>
                                        <li class="mobile-links__item" data-collapse-item>
                                            <div class="mobile-links__item-title">
                                                <a href="" class="mobile-links__item-link">Wrenches</a>
                                            </div>
                                        </li>
                                        <li class="mobile-links__item" data-collapse-item>
                                            <div class="mobile-links__item-title">
                                                <a href="" class="mobile-links__item-link">Wall Chaser</a>
                                            </div>
                                        </li>
                                        <li class="mobile-links__item" data-collapse-item>
                                            <div class="mobile-links__item-title">
                                                <a href="" class="mobile-links__item-link">Pneumatic Tools</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="" class="mobile-links__item-link">Machine Tools</a>
                                    <button class="mobile-links__item-toggle" type="button" data-collapse-trigger>
                                        <svg class="mobile-links__item-arrow" width="12px" height="7px">
                                            <use xlink:href="/fe/HTML/default/images/sprite.svg#arrow-rounded-down-12x7"></use>
                                        </svg>
                                    </button>
                                </div>
                                <div class="mobile-links__item-sub-links" data-collapse-content>
                                    <ul class="mobile-links mobile-links--level--2">
                                        <li class="mobile-links__item" data-collapse-item>
                                            <div class="mobile-links__item-title">
                                                <a href="" class="mobile-links__item-link">Thread Cutting</a>
                                            </div>
                                        </li>
                                        <li class="mobile-links__item" data-collapse-item>
                                            <div class="mobile-links__item-title">
                                                <a href="" class="mobile-links__item-link">Chip Blowers</a>
                                            </div>
                                        </li>
                                        <li class="mobile-links__item" data-collapse-item>
                                            <div class="mobile-links__item-title">
                                                <a href="" class="mobile-links__item-link">Sharpening Machines</a>
                                            </div>
                                        </li>
                                        <li class="mobile-links__item" data-collapse-item>
                                            <div class="mobile-links__item-title">
                                                <a href="" class="mobile-links__item-link">Pipe Cutters</a>
                                            </div>
                                        </li>
                                        <li class="mobile-links__item" data-collapse-item>
                                            <div class="mobile-links__item-title">
                                                <a href="" class="mobile-links__item-link">Slotting machines</a>
                                            </div>
                                        </li>
                                        <li class="mobile-links__item" data-collapse-item>
                                            <div class="mobile-links__item-title">
                                                <a href="" class="mobile-links__item-link">Lathes</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="mobile-links__item" data-collapse-item>
                    <div class="mobile-links__item-title">
                        <a href="shop-grid-3-columns-sidebar.html" class="mobile-links__item-link">Shop</a>
                        <button class="mobile-links__item-toggle" type="button" data-collapse-trigger>
                            <svg class="mobile-links__item-arrow" width="12px" height="7px">
                                <use xlink:href="/fe/HTML/default/images/sprite.svg#arrow-rounded-down-12x7"></use>
                            </svg>
                        </button>
                    </div>
                    <div class="mobile-links__item-sub-links" data-collapse-content>
                        <ul class="mobile-links mobile-links--level--1">
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="shop-grid-3-columns-sidebar.html" class="mobile-links__item-link">Shop Grid</a>
                                    <button class="mobile-links__item-toggle" type="button" data-collapse-trigger>
                                        <svg class="mobile-links__item-arrow" width="12px" height="7px">
                                            <use xlink:href="/fe/HTML/default/images/sprite.svg#arrow-rounded-down-12x7"></use>
                                        </svg>
                                    </button>
                                </div>
                                <div class="mobile-links__item-sub-links" data-collapse-content>
                                    <ul class="mobile-links mobile-links--level--2">
                                        <li class="mobile-links__item" data-collapse-item>
                                            <div class="mobile-links__item-title">
                                                <a href="shop-grid-3-columns-sidebar.html" class="mobile-links__item-link">3 Columns Sidebar</a>
                                            </div>
                                        </li>
                                        <li class="mobile-links__item" data-collapse-item>
                                            <div class="mobile-links__item-title">
                                                <a href="shop-grid-4-columns-full.html" class="mobile-links__item-link">4 Columns Full</a>
                                            </div>
                                        </li>
                                        <li class="mobile-links__item" data-collapse-item>
                                            <div class="mobile-links__item-title">
                                                <a href="shop-grid-5-columns-full.html" class="mobile-links__item-link">5 Columns Full</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="shop-list.html" class="mobile-links__item-link">Shop List</a>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="shop-right-sidebar.html" class="mobile-links__item-link">Shop Right Sidebar</a>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="product.html" class="mobile-links__item-link">Product</a>
                                    <button class="mobile-links__item-toggle" type="button" data-collapse-trigger>
                                        <svg class="mobile-links__item-arrow" width="12px" height="7px">
                                            <use xlink:href="/fe/HTML/default/images/sprite.svg#arrow-rounded-down-12x7"></use>
                                        </svg>
                                    </button>
                                </div>
                                <div class="mobile-links__item-sub-links" data-collapse-content>
                                    <ul class="mobile-links mobile-links--level--2">
                                        <li class="mobile-links__item" data-collapse-item>
                                            <div class="mobile-links__item-title">
                                                <a href="product.html" class="mobile-links__item-link">Product</a>
                                            </div>
                                        </li>
                                        <li class="mobile-links__item" data-collapse-item>
                                            <div class="mobile-links__item-title">
                                                <a href="product-alt.html" class="mobile-links__item-link">Product Alt</a>
                                            </div>
                                        </li>
                                        <li class="mobile-links__item" data-collapse-item>
                                            <div class="mobile-links__item-title">
                                                <a href="product-sidebar.html" class="mobile-links__item-link">Product Sidebar</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="cart.html" class="mobile-links__item-link">Cart</a>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="cart-empty.html" class="mobile-links__item-link">Cart Empty</a>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="checkout.html" class="mobile-links__item-link">Checkout</a>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="order-success.html" class="mobile-links__item-link">Order Success</a>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="wishlist.html" class="mobile-links__item-link">Wishlist</a>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="compare.html" class="mobile-links__item-link">Compare</a>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="track-order.html" class="mobile-links__item-link">Track Order</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="mobile-links__item" data-collapse-item>
                    <div class="mobile-links__item-title">
                        <a href="account-login.html" class="mobile-links__item-link">Account</a>
                        <button class="mobile-links__item-toggle" type="button" data-collapse-trigger>
                            <svg class="mobile-links__item-arrow" width="12px" height="7px">
                                <use xlink:href="/fe/HTML/default/images/sprite.svg#arrow-rounded-down-12x7"></use>
                            </svg>
                        </button>
                    </div>
                    <div class="mobile-links__item-sub-links" data-collapse-content>
                        <ul class="mobile-links mobile-links--level--1">
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="account-login.html" class="mobile-links__item-link">Login</a>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="account-dashboard.html" class="mobile-links__item-link">Dashboard</a>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="account-profile.html" class="mobile-links__item-link">Edit Profile</a>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="account-orders.html" class="mobile-links__item-link">Order History</a>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="account-order-details.html" class="mobile-links__item-link">Order Details</a>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="account-addresses.html" class="mobile-links__item-link">Address Book</a>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="account-edit-address.html" class="mobile-links__item-link">Edit Address</a>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="account-password.html" class="mobile-links__item-link">Change Password</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="mobile-links__item" data-collapse-item>
                    <div class="mobile-links__item-title">
                        <a href="blog-classic.html" class="mobile-links__item-link">Blog</a>
                        <button class="mobile-links__item-toggle" type="button" data-collapse-trigger>
                            <svg class="mobile-links__item-arrow" width="12px" height="7px">
                                <use xlink:href="/fe/HTML/default/images/sprite.svg#arrow-rounded-down-12x7"></use>
                            </svg>
                        </button>
                    </div>
                    <div class="mobile-links__item-sub-links" data-collapse-content>
                        <ul class="mobile-links mobile-links--level--1">
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="blog-classic.html" class="mobile-links__item-link">Blog Classic</a>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="blog-grid.html" class="mobile-links__item-link">Blog Grid</a>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="blog-list.html" class="mobile-links__item-link">Blog List</a>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="blog-left-sidebar.html" class="mobile-links__item-link">Blog Left Sidebar</a>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="post.html" class="mobile-links__item-link">Post Page</a>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="post-without-sidebar.html" class="mobile-links__item-link">Post Without Sidebar</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="mobile-links__item" data-collapse-item>
                    <div class="mobile-links__item-title">
                        <a href="" class="mobile-links__item-link">Pages</a>
                        <button class="mobile-links__item-toggle" type="button" data-collapse-trigger>
                            <svg class="mobile-links__item-arrow" width="12px" height="7px">
                                <use xlink:href="/fe/HTML/default/images/sprite.svg#arrow-rounded-down-12x7"></use>
                            </svg>
                        </button>
                    </div>
                    <div class="mobile-links__item-sub-links" data-collapse-content>
                        <ul class="mobile-links mobile-links--level--1">
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="about-us.html" class="mobile-links__item-link">About Us</a>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="contact-us.html" class="mobile-links__item-link">Contact Us</a>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="contact-us-alt.html" class="mobile-links__item-link">Contact Us Alt</a>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="404.html" class="mobile-links__item-link">404</a>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="terms-and-conditions.html" class="mobile-links__item-link">Terms And Conditions</a>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="faq.html" class="mobile-links__item-link">FAQ</a>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="components.html" class="mobile-links__item-link">Components</a>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="typography.html" class="mobile-links__item-link">Typography</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="mobile-links__item" data-collapse-item>
                    <div class="mobile-links__item-title">
                        <a data-collapse-trigger class="mobile-links__item-link">Currency</a>
                        <button class="mobile-links__item-toggle" type="button" data-collapse-trigger>
                            <svg class="mobile-links__item-arrow" width="12px" height="7px">
                                <use xlink:href="/fe/HTML/default/images/sprite.svg#arrow-rounded-down-12x7"></use>
                            </svg>
                        </button>
                    </div>
                    <div class="mobile-links__item-sub-links" data-collapse-content>
                        <ul class="mobile-links mobile-links--level--1">
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="" class="mobile-links__item-link">€ Euro</a>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="" class="mobile-links__item-link">£ Pound Sterling</a>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="" class="mobile-links__item-link">$ US Dollar</a>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="" class="mobile-links__item-link">₽ Russian Ruble</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="mobile-links__item" data-collapse-item>
                    <div class="mobile-links__item-title">
                        <a data-collapse-trigger class="mobile-links__item-link">Language</a>
                        <button class="mobile-links__item-toggle" type="button" data-collapse-trigger>
                            <svg class="mobile-links__item-arrow" width="12px" height="7px">
                                <use xlink:href="/fe/HTML/default/images/sprite.svg#arrow-rounded-down-12x7"></use>
                            </svg>
                        </button>
                    </div>
                    <div class="mobile-links__item-sub-links" data-collapse-content>
                        <ul class="mobile-links mobile-links--level--1">
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="" class="mobile-links__item-link">English</a>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="" class="mobile-links__item-link">French</a>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="" class="mobile-links__item-link">German</a>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="" class="mobile-links__item-link">Russian</a>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="" class="mobile-links__item-link">Italian</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- mobilemenu / end -->
<!-- photoswipe -->
<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="pswp__bg"></div>
    <div class="pswp__scroll-wrap">
        <div class="pswp__container">
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
        </div>
        <div class="pswp__ui pswp__ui--hidden">
            <div class="pswp__top-bar">
                <div class="pswp__counter"></div>
                <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
                <!--<button class="pswp__button pswp__button&#45;&#45;share" title="Share"></button>-->
                <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
                <div class="pswp__preloader">
                    <div class="pswp__preloader__icn">
                        <div class="pswp__preloader__cut">
                            <div class="pswp__preloader__donut"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                <div class="pswp__share-tooltip"></div>
            </div>
            <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>
            <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>
            <div class="pswp__caption">
                <div class="pswp__caption__center"></div>
            </div>
        </div>
    </div>
</div>
<!-- photoswipe / end -->
<!-- js -->
<script src="/fe/HTML/default/vendor/jquery/jquery.min.js"></script>
<script src="/fe/HTML/default/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/fe/HTML/default/vendor/owl-carousel/owl.carousel.min.js"></script>
<script src="/fe/HTML/default/vendor/nouislider/nouislider.min.js"></script>
<script src="/fe/HTML/default/vendor/photoswipe/photoswipe.min.js"></script>
<script src="/fe/HTML/default/vendor/photoswipe/photoswipe-ui-default.min.js"></script>
<script src="/fe/HTML/default/vendor/select2/js/select2.min.js"></script>
<script src="/fe/HTML/default/js/number.js"></script>
<script src="/fe/HTML/default/js/main.js"></script>
<script src="/fe/HTML/default/js/header.js"></script>
<script src="/fe/HTML/default/vendor/svg4everybody/svg4everybody.min.js"></script>
<script>
    svg4everybody();
</script>
</body>

</html>

