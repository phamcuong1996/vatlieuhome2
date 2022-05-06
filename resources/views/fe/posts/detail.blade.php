@extends('frontend.layout.home')
@section('content')
    <div style="display: flex">
        <div class="card container">
            <div class="col-md-7" style="padding:10px">
                <h3 >{{ $post->title }}</h3>
                <h6 class="card-title">{{ $post->created_at }}</h6>
                <div class="card-body">
                    <img class="card" style="width: 600px;height: 500px" src="{{ $post->image }}">
                    <span class="card-text">{{ $post->short_content }}</span>
                    <span class="card-text">{{ $post->content }}</span>
                </div>
            </div>
        </div>
        <div class="col-md-5" style="padding: 20px">
            <div >
                <form method="GET" action="https://vatlieuhome.com/bai-viet" accept-charset="UTF-8" class="widget-search__body">
                    <input class="widget-search__input" placeholder="Tìm kiếm" name="search_term" type="text">
                    <button class="widget-search__button" type="submit">
                        <svg width="20px" height="20px">
                            <use xlink:href="/frontend/images/sprite.svg#search-20"></use>
                        </svg>
                    </button>
                </form>
            </div>
            <div class="card" style="padding: 20px">
                <h4 class="widget__title">Vật Liệu Home</h4>
                <div class="widget-aboutus__text">
                    Công ty cổ phần Vật Liệu HOME chuyên cung cấp các sản phẩm chống thấm, keo dán gach, miết mạch, silicon, cách âm cách nhiệt và các vật liệu phụ trợ khác. Chúng tôi cam kết mang lại cho khách hàng sự Tin Tưởng - Hài Long nhất.
                </div>
                <!-- social-links -->
                <div class="social-links widget-aboutus__socials social-links--shape--rounded">
                    <ul class="social-links__list">
                        <li class="social-links__item">
                            <a class="social-links__link social-links__link--type--youtube" href="https://www.youtube.com" target="_blank">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </li>
                        <li class="social-links__item">
                            <a class="social-links__link social-links__link--type--facebook" href="https://www.facebook.com/HomeMSP/" target="_blank">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- social-links / end -->
            </div >
            <div class="card" style="padding: 20px">
                <div class="widget-posts widget">
                    <h4 class="widget__title">Bài viết mới</h4>
                    <div class="widget-posts__list">
                        <div class="widget-posts__item">
                            <div class="widget-posts__image">
                                <a href="">
                                    <img src="https://vatlieuhome.s3.ap-southeast-1.amazonaws.com/posts/4_2.PNG" alt="" style="height: 60px">
                                </a>
                            </div>
                            <div class="widget-posts__info">
                                <div class="widget-posts__name">
                                    <a href="https://vatlieuhome.com/bai-viet/keo-dan-gach-la-gi-tai-sao-nen-dung-keo-dan-gach-4">Keo dán gạch là gì? Tại sao nên dùng keo dán gạch?</a>
                                </div>
                                <div class="widget-posts__date">Ngày: 16-04-2020</div>
                            </div>
                        </div>
                        <div class="widget-posts__item">
                            <div class="widget-posts__image">
                                <a href="">
                                    <img src="https://vatlieuhome.s3.ap-southeast-1.amazonaws.com/posts/5_chong-tham-la-gi.jpg" alt="" style="height: 60px">
                                </a>
                            </div>
                            <div class="widget-posts__info">
                                <div class="widget-posts__name">
                                    <a href="https://vatlieuhome.com/bai-viet/chong-tham-la-gi-viec-chong-tham-co-can-thiet-khong-5">Chống thấm là gì ? Việc chống thấm có cần thiết không?</a>
                                </div>
                                <div class="widget-posts__date">Ngày: 17-04-2020</div>
                            </div>
                        </div>
                        <div class="widget-posts__item">
                            <div class="widget-posts__image">
                                <a href="">
                                    <img src="https://vatlieuhome.s3.ap-southeast-1.amazonaws.com/posts/6_Tam-op-tuong-eco-board-.png" alt="" style="height: 60px">
                                </a>
                            </div>
                            <div class="widget-posts__info">
                                <div class="widget-posts__name">
                                    <a href="https://vatlieuhome.com/bai-viet/tam-cach-nhiet-eco-xps-foam-6">Tấm cách nhiệt  ECO XPS Foam.</a>
                                </div>
                                <div class="widget-posts__date">Ngày: 17-04-2020</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card" style="padding: 20px">
                <h4 class="widget__title">Categories</h4>
                <div class="tags tags--lg">
                    <div class="tags__list">
                        <div class="card"><a href="https://vatlieuhome.com/bai-viet/danh-muc/tuyen-dung-1">Tuyển dụng</a></div>
                        <a class="card" href="https://vatlieuhome.com/bai-viet/danh-muc/khuyen-mai-2">Khuyến mại</a>
                        <a class="card" href="https://vatlieuhome.com/bai-viet/danh-muc/du-an-4">Dự án</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
