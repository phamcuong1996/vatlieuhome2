<div class="block block-products-carousel" data-layout="grid-4" data-mobile-grid-columns="2">
    <div class="container">
        <div class="block-header">
            <h3 class="block-header__title">{{ $productListTitle ?? 'abc' }}</h3>
            <div class="block-header__divider"></div>
            <ul class="block-header__groups-list">
                <li>
                    <button type="button" class="block-header__group  block-header__group--active ">All</button>
                </li>
                <li>
                    <button type="button" class="block-header__group ">Power Tools</button>
                </li>
                <li>
                    <button type="button" class="block-header__group ">Hand Tools</button>
                </li>
                <li>
                    <button type="button" class="block-header__group ">Plumbing</button>
                </li>
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
                @foreach($products as $sach)
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
{{--                                    {{ $sach ->type ===1 ?'New': $sach->type ===2 ?'Hot':'Sale' }}--}}
                                        @if ($sach->type==1)
                                            <div class="product-card__badge product-card__badge--hot">Hot</div>
                                        @elseif ($sach->type==2)
                                            <div class="product-card__badge product-card__badge--new">New</div>
                                        @else
                                            <div class="product-card__badge product-card__badge--sale">Sale</div>
                                        @endif
                                </div>
                                <div class="product-card__image product-image">
                                    <a href="/products/{{ $sach->id }}" class="product-image__body">
                                        <img class="product-image__img" src="{{$sach->image}}" alt="">
                                    </a>
                                </div>
                                <div class="product-card__info">
                                    <div class="product-card__name">
                                        <a href="product.html">{{ $sach->name }}</a>
                                    </div>
                                    <div class="product-card__rating">
                                        <div class="product-card__rating-stars">
                                            <div class="rating">
                                                <div class="rating__body">
                                                    <svg class="rating__star rating__star--active" width="13px"
                                                         height="12px">
                                                        <g class="rating__fill">
                                                            <use
                                                                xlink:href="/fe/HTML/default/images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="/fe/HTML/default/images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star rating__star--active" width="13px"
                                                         height="12px">
                                                        <g class="rating__fill">
                                                            <use
                                                                xlink:href="/fe/HTML/default/images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="/fe/HTML/default/images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star rating__star--active" width="13px"
                                                         height="12px">
                                                        <g class="rating__fill">
                                                            <use
                                                                xlink:href="/fe/HTML/default/images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="/fe/HTML/default/images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star rating__star--active" width="13px"
                                                         height="12px">
                                                        <g class="rating__fill">
                                                            <use
                                                                xlink:href="/fe/HTML/default/images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="/fe/HTML/default/images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star " width="13px" height="12px">
                                                        <g class="rating__fill">
                                                            <use
                                                                xlink:href="/fe/HTML/default/images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="/fe/HTML/default/images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div class="rating__star rating__star--only-edge ">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-card__rating-legend">9 Reviews</div>
                                    </div>
                                    <ul class="product-card__features-list">
                                        <li>Speed: 750 RPM</li>
                                        <li>Power Source: Cordless-Electric</li>
                                        <li>Battery Cell Type: Lithium</li>
                                        <li>Voltage: 20 Volts</li>
                                        <li>Battery Capacity: 2 Ah</li>
                                    </ul>
                                </div>
                                <div class="product-card__actions">
                                    <div class="product-card__availability">
                                        Availability: <span class="text-success">In Stock</span>
                                    </div>
                                    <div class="product-card__prices">
                                        {{ number_format($sach->price) }}
                                    </div>
                                    <div class="product-card__buttons">
                                        <div class="product__actions-item ">
                                            <button style="width: 185px" type="button"
                                                    class="btn btn-warning btn-lg add_to_cart"
                                                    data-id="2">Thêm Vào Giỏ
                                            </button>
                                        </div>
                                        <button
                                            class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist"
                                            type="button">
                                            <svg width="16px" height="16px">
                                                <use xlink:href="/fe/HTML/default/images/sprite.svg#wishlist-16"></use>
                                            </svg>
                                            <span class="fake-svg-icon fake-svg-icon--wishlist-16"></span>
                                        </button>
                                        <button
                                            class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare"
                                            type="button">
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
