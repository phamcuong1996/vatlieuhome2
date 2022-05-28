<div class="block block-posts" data-layout="list" data-mobile-columns="1">
    <div class="container">
        <div class="block-header">
            <h3 class="block-header__title">Bài Viết </h3>
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
        <div class="block-posts__slider">
            <div class="owl-carousel">
                @foreach($posts as $post)
                <div class="post-card  ">
                    <div class="post-card__image">
                        <a href="/posts/{{$post->id}}/detail">
                            <img src="{{$post->image}}" alt="">
                        </a>
                    </div>
                    <div class="post-card__info">
                        <div class="post-card__category">
                            <a href="">Special Offers</a>
                        </div>
                        <div class="post-card__name">
                            <a href="">{{$post->title}}</a>
                        </div>
                        <div class="post-card__date">{{$post->create_at}}</div>
                        <div class="post-card__content">
                            {{$post->short_content}}
                        </div>
                        <div class="post-card__read-more">
                            <a href="" class="btn btn-secondary btn-sm">Read More</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
