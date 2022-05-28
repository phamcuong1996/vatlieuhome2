<div class="block block-products block-products--layout--large-first" data-mobile-grid-columns="2">
    <div class="container">
        <div class="block-header">
            <h3 class="block-header__title">Sản Phẩm Đang Giảm Giá</h3>
            <div class="block-header__divider"></div>
        </div>
        <div class="block-products__body">
            <div class="block-products__featured">
                <div class="block-products__featured-item">
                    <div class="product-card product-card--hidden-actions ">
                        <div class="product-card__image product-image">
                            <a href="product.html" class="product-image__body">
                                <img class="product-image__img" src="https://kientaoviet.vn/wp-content/uploads/2020/09/cac-loai-vat-lieu-xay-dung-1.jpg" alt="">
                            </a>
                        </div>
                        <div class="product-card__info">
                            <div class="product-card__name">
                                <h4 style="color: red">Hot Line: 0845336696</h4>
                            </div>
                            <div class="product-card__name">
                                <h4 style="color: red">Hot Line: 0845336696</h4>
                            </div>
                            <div class="product-card__name">
                                <h4 style="color: red">Hot Line: 0845336696</h4>
                            </div>
                            <br>
                            <div class="product-card__name">
                                <h4 >Liên hệ với chúng tôi khi cần trợ giúp</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="block-products__list">
                @foreach($hot as $sach)
                    <div class="block-products__list-item">
                        <div class="product-card product-card--hidden-actions ">
                            <button class="product-card__quickview" type="button">
                                <svg width="16px" height="16px">
                                    <use xlink:href="/fe/HTML/default/images/sprite.svg#quickview-16"></use>
                                </svg>
                                <span class="fake-svg-icon"></span>
                            </button>
                            <div class="product-card__badges-list">
                                <div class="product-card__badge product-card__badge--sale">Sale</div>
                            </div>
                            <div class="product-card__image product-image">
                                <a href="/products/{{$sach->id}}" class="product-image__body">
                                    <img class="product-image__img" src="{{$sach->image}}" alt="">
                                </a>
                            </div>
                            <div class="product-card__info">
                                <div class="product-card__name">
                                    <a href="product.html">{{$sach->name}}</a>
                                </div>
                                <div class="product-card__rating">
                                    <div class="product-card__rating-stars">
                                        <div class="rating">
                                            <div class="rating__body">
                                                <svg class="rating__star rating__star--active" width="13px" height="12px">
                                                    <g class="rating__fill">
                                                        <use xlink:href="/fe/HTML/default/images/sprite.svg#star-normal"></use>
                                                    </g>
                                                    <g class="rating__stroke">
                                                        <use xlink:href="/fe/HTML/default/images/sprite.svg#star-normal-stroke"></use>
                                                    </g>
                                                </svg>
                                                <div class="rating__star rating__star--only-edge rating__star--active">
                                                    <div class="rating__fill">
                                                        <div class="fake-svg-icon"></div>
                                                    </div>
                                                    <div class="rating__stroke">
                                                        <div class="fake-svg-icon"></div>
                                                    </div>
                                                </div>
                                                <svg class="rating__star rating__star--active" width="13px" height="12px">
                                                    <g class="rating__fill">
                                                        <use xlink:href="/fe/HTML/default/images/sprite.svg#star-normal"></use>
                                                    </g>
                                                    <g class="rating__stroke">
                                                        <use xlink:href="/fe/HTML/default/images/sprite.svg#star-normal-stroke"></use>
                                                    </g>
                                                </svg>
                                                <div class="rating__star rating__star--only-edge rating__star--active">
                                                    <div class="rating__fill">
                                                        <div class="fake-svg-icon"></div>
                                                    </div>
                                                    <div class="rating__stroke">
                                                        <div class="fake-svg-icon"></div>
                                                    </div>
                                                </div>
                                                <svg class="rating__star rating__star--active" width="13px" height="12px">
                                                    <g class="rating__fill">
                                                        <use xlink:href="/fe/HTML/default/images/sprite.svg#star-normal"></use>
                                                    </g>
                                                    <g class="rating__stroke">
                                                        <use xlink:href="/fe/HTML/default/images/sprite.svg#star-normal-stroke"></use>
                                                    </g>
                                                </svg>
                                                <div class="rating__star rating__star--only-edge rating__star--active">
                                                    <div class="rating__fill">
                                                        <div class="fake-svg-icon"></div>
                                                    </div>
                                                    <div class="rating__stroke">
                                                        <div class="fake-svg-icon"></div>
                                                    </div>
                                                </div>
                                                <svg class="rating__star rating__star--active" width="13px" height="12px">
                                                    <g class="rating__fill">
                                                        <use xlink:href="/fe/HTML/default/images/sprite.svg#star-normal"></use>
                                                    </g>
                                                    <g class="rating__stroke">
                                                        <use xlink:href="/fe/HTML/default/images/sprite.svg#star-normal-stroke"></use>
                                                    </g>
                                                </svg>
                                                <div class="rating__star rating__star--only-edge rating__star--active">
                                                    <div class="rating__fill">
                                                        <div class="fake-svg-icon"></div>
                                                    </div>
                                                    <div class="rating__stroke">
                                                        <div class="fake-svg-icon"></div>
                                                    </div>
                                                </div>
                                                <svg class="rating__star rating__star--active" width="13px" height="12px">
                                                    <g class="rating__fill">
                                                        <use xlink:href="/fe/HTML/default/images/sprite.svg#star-normal"></use>
                                                    </g>
                                                    <g class="rating__stroke">
                                                        <use xlink:href="/fe/HTML/default/images/sprite.svg#star-normal-stroke"></use>
                                                    </g>
                                                </svg>
                                                <div class="rating__star rating__star--only-edge rating__star--active">
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
                                    <div class="product-card__rating-legend">11 Reviews</div>
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
                                    {{$sach->price}}
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
