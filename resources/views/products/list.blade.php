@extends('fe.layout.home')
@section('content')
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
<div class="block block-products-carousel" data-layout="grid-5" data-mobile-grid-columns="2">
    <div class="container">
        <div class="block-header">
            <h3 class="block-header__title">Sản Phẩm Liên Quan</h3>
            <div class="block-header__divider"></div>
            <div class="block-header__arrows-list">
                <button class="block-header__arrow block-header__arrow--left" type="button">
                    <svg width="7px" height="11px">
                        <use xlink:href="/fe/HTML/default/images/sprite.svg#arrow-rounded-left-7x11"></use>
                    </svg>
                </button>
                <button class="block-header__arrow block-header__arrow--right" type="button">
                    <svg width="7px" height="11px">
                        <use xlink:href="/fe/HTML/default/images/sprite.svg#arrow-rounded-right-7x11"></use>
                    </svg>
                </button>
            </div>
        </div>
        <div class="block-products-carousel__slider">
            <div class="block-products-carousel__preloader"></div>
            <div class="owl-carousel">
                @foreach($lists as $list)
                    <div class="block-products-carousel__column">
                        <div class="block-products-carousel__cell">
                            <div class="product-card product-card--hidden-actions ">
                                <button class="product-card__quickview" type="button">
                                    <svg width="16px" height="16px">
                                        <use xlink:href="/fe/HTML/default/images/sprite.svg#quickview-16"></use>
                                    </svg>
                                    <span class="fake-svg-icon"></span>
                                </button>
                                <div class="product-card__badges-list">
                                    <div class="product-card__badge product-card__badge--new">New</div>
                                </div>
                                <div class="product-card__image product-image">
                                    <a href="product.html" class="product-image__body">
                                        <img class="product-image__img" src="{{$list->image}}" alt="">
                                    </a>
                                </div>
                                <div class="product-card__info">
                                    <div class="product-card__name">
                                        <a href="product.html">{{$list->name}}</a>
                                    </div>
                                </div>
                                <div class="product-card__actions">
                                    <div class="product-card__availability">
                                        Availability: <span class="text-success">In Stock</span>
                                    </div>
                                    <div class="product-card__prices">
                                        {{number_format($list->price)}}
                                    </div>
                                    <div class="product-card__buttons">
                                        <button class="btn btn-primary product-card__addtocart" type="button">Add To Cart</button>
                                        <button class="btn btn-secondary product-card__addtocart product-card__addtocart--list" type="button">Add To Cart</button>
                                        <button class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist" type="button">
                                            <svg width="16px" height="16px">
                                                <use xlink:href="/fe/HTML/default/images/sprite.svg#wishlist-16"></use>
                                            </svg>
                                            <span class="fake-svg-icon fake-svg-icon--wishlist-16"></span>
                                        </button>
                                        <button class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare" type="button">
                                            <svg width="16px" height="16px">
                                                <use xlink:href="/fe/HTML/default/images/sprite.svg#compare-16"></use>
                                            </svg>
                                            <span class="fake-svg-icon fake-svg-icon--compare-16"></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
</body>
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
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
@endsection

