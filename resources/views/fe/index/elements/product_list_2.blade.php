<div class="block block-products-carousel" data-layout="horizontal" data-mobile-grid-columns="2">
    <div class="container">
        <div class="block-header">
            <h3 class="block-header__title">Sảm Phẩm Sale</h3>
            <div class="block-header__divider"></div>
            <ul class="block-header__groups-list">
                <li><button type="button" class="block-header__group  block-header__group--active ">All</button></li>
                <li><button type="button" class="block-header__group ">Power Tools</button></li>
                <li><button type="button" class="block-header__group ">Hand Tools</button></li>
                <li><button type="button" class="block-header__group ">Plumbing</button></li>
            </ul>
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
                <div class="block-products-carousel__column">
                    @foreach($sale as $sach)
                        <div class="block-products-carousel__cell">
                            <div class="product-card product-card--hidden-actions ">
                                <button class="product-card__quickview" type="button">
                                    <svg width="16px" height="16px">
                                        <use xlink:href="/fe/HTML/default/images/sprite.svg#quickview-16"></use>
                                    </svg>
                                    <span class="fake-svg-icon"></span>
                                </button>
                                <div class="product-card__badges-list">
                                    <div class="product-card__badge product-card__badge--new">Sale</div>
                                </div>
                                <div class="product-card__image product-image">
                                    <a href="product.html" class="product-image__body">
                                        <img class="product-image__img" src="{{$sach->image}}" alt="">
                                    </a>
                                </div>
                                <div class="product-card__info">
                                    <div class="product-card__name">
                                        <a href="product.html">{{$sach-> name}}</a>
                                    </div>
                                </div>
                                <div class="product-card__actions">
                                    <div class="product-card__availability">
                                        Availability: <span class="text-success">In Stock</span>
                                    </div>
                                    <div class="product-card__prices">
                                        $749.00
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
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
