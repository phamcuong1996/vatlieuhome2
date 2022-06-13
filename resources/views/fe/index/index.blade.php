@extends('fe.layout.home')

@section('content')
    <div class="site__body">
        <!-- .block-slideshow -->
        <div class="block-slideshow block-slideshow--layout--with-departments block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 d-none d-lg-block"></div>
                    <div class="col-12 col-lg-9">
                        <div class="block-slideshow__body">
                            <div class="owl-carousel">
                                @foreach($banners as $sach)
                                <a class="block-slideshow__slide" href="">
                                    <div class="block-slideshow__slide-image block-slideshow__slide-image--desktop" style="background-image: url('/update/{{$sach->image}}')"></div>
                                    <div class="block-slideshow__slide-image block-slideshow__slide-image--mobile" style="background-image: url('/update/{{$sach->image}}')"></div>
                                    <div class="block-slideshow__slide-content">
                                        <div class="block-slideshow__slide-button">
                                            <span class="btn btn-primary btn-lg">Shop Now</span>
                                        </div>
                                    </div>
                                </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- .block-slideshow / end -->
        <!-- .block-features -->
        <div class="block block-features block-features--layout--classic">
            <div class="container">
                <div class="block-features__list">
                    <div class="block-features__item">
                        <div class="block-features__icon">
                            <svg width="48px" height="48px">
                                <use xlink:href="/fe/HTML/default/images/sprite.svg#fi-free-delivery-48"></use>
                            </svg>
                        </div>
                        <div class="block-features__content">
                            <div class="block-features__title">Free Shipping</div>
                            <div class="block-features__subtitle">For orders from $50</div>
                        </div>
                    </div>
                    <div class="block-features__divider"></div>
                    <div class="block-features__item">
                        <div class="block-features__icon">
                            <svg width="48px" height="48px">
                                <use xlink:href="/fe/HTML/default/images/sprite.svg#fi-24-hours-48"></use>
                            </svg>
                        </div>
                        <div class="block-features__content">
                            <div class="block-features__title">Support 24/7</div>
                            <div class="block-features__subtitle">Call us anytime</div>
                        </div>
                    </div>
                    <div class="block-features__divider"></div>
                    <div class="block-features__item">
                        <div class="block-features__icon">
                            <svg width="48px" height="48px">
                                <use xlink:href="/fe/HTML/default/images/sprite.svg#fi-payment-security-48"></use>
                            </svg>
                        </div>
                        <div class="block-features__content">
                            <div class="block-features__title">100% Safety</div>
                            <div class="block-features__subtitle">Only secure payments</div>
                        </div>
                    </div>
                    <div class="block-features__divider"></div>
                    <div class="block-features__item">
                        <div class="block-features__icon">
                            <svg width="48px" height="48px">
                                <use xlink:href="/fe/HTML/default/images/sprite.svg#fi-tag-48"></use>
                            </svg>
                        </div>
                        <div class="block-features__content">
                            <div class="block-features__title">Hot Offers</div>
                            <div class="block-features__subtitle">Discounts up to 90%</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- .block-features / end -->
        <!-- .block-products-carousel -->
        @include('fe.index.elements.product_list', ['products' => $chongTham, 'productListTitle' => 'Chống Thấm'])
        @include('fe.index.elements.product_list', ['products' => $keoDan, 'productListTitle' => 'Keo Dán - Miết Mạch'])
        <!-- .block-products-carousel / end -->
        <!-- .block-banner -->
        <div class="block block-banner">
            <div class="container">
                <a href="" class="block-banner__body">
                    <div class="block-banner__image block-banner__image--desktop" style="background-image: url('/fe/HTML/default/images/banners/banner-1.jpg')"></div>
                    <div class="block-banner__image block-banner__image--mobile" style="background-image: url('/fe/HTML/default/images/banners/banner-1-mobile.jpg')"></div>
                    <div class="block-banner__title">Hundreds <br class="block-banner__mobile-br"> Hand Tools</div>
                    <div class="block-banner__text">Hammers, Chisels, Universal Pliers, Nippers, Jigsaws, Saws</div>
                    <div class="block-banner__button">
                        <span class="btn btn-sm btn-primary">Shop Now</span>
                    </div>
                </a>
            </div>
        </div>
        <!-- .block-banner / end -->
        <!-- .block-products -->
        @include('fe.index.elements.product_list_1')
        <!-- .block-products / end -->
        @include('fe.index.elements.product_list', ['products' => $thepXayDung, 'productListTitle' => 'Thép Xây Dựng'])
        <!-- .block-products-carousel -->
        @include('fe.index.elements.product_list_2')
        <!-- .block-products-carousel / end -->
        <!-- .block-posts -->
        @include('fe.index.elements.product_list_3', ['products' => $new, 'productListTitle' => 'Sản Phẩm Mới'])
        <!-- .block-posts / end -->
        <!-- .block-brands -->
        <div class="block block-brands">
            <div class="container">
                <div class="block-brands__slider">
                    <div class="owl-carousel">
                        <div class="block-brands__item">
                            <a href=""><img src="https://vatlieuhome.com/brand/maika.jpg" alt=""></a>
                        </div>
                        <div class="block-brands__item">
                            <a href=""><img src="https://vatlieuhome.com/brand/sika.png" alt=""></a>
                        </div>
                        <div class="block-brands__item">
                            <a href=""><img src="https://vatlieuhome.com/brand/khaihoan.png" alt=""></a>
                        </div>
                        <div class="block-brands__item">
                            <a href=""><img src="https://vatlieuhome.com/brand/hoa_binh.webp" alt=""></a>
                        </div>
                        <div class="block-brands__item">
                            <a href=""><img src="https://vatlieuhome.com/brand/xps.png" alt=""></a>
                        </div>
                        <div class="block-brands__item">
                            <a href=""><img src="https://vatlieuhome.com/brand/coteccons.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- .block-brands / end -->
        @include('fe.index.elements.post_list')
    </div>
@endsection
