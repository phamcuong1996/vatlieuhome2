@extends('fe.layout.home')

@section('content')
    <div class="card container">
        @include('fe.index.elements.post_list', ['postList' => $postsList])
    </div>
    <div class="card container" style="padding:30px;">
        <h3 style="color: blue">Chống Thấm</h3>
        @include('fe.index.elements.product_list', ['productByCategory' => $chongThamProducts])
    </div>
    <div class="card container" style="padding:30px;">
        <h3 style="color: blue">Keo Dán,Miết Mạch</h3>
        @include('fe.index.elements.product_list', ['productByCategory' => $keoDanProducts])
    </div>
    <div class="card container" style="padding:30px;">
        <h3 style="color: blue">Thép Xây Dựng</h3>
        @include('fe.index.elements.product_list', ['productByCategory' => $thepXayDungProducts])
    </div>
    <div class="card container" style="padding:30px;">
        <h3 style="color: blue">Silicon</h3>
        @include('fe.index.elements.product_list', ['productByCategory' => $siliconProducts])
    </div>
    <div class="card container" style="padding:30px;">
        <h3 style="color: blue">DỰ ÁN</h3>
        @include('fe.index.elements.post_by_category_id', ['postList' => $duAn])
    </div>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="1" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2" class="active"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" w-100 src="https://intphcm.com/data/upload/mau-banner-hinh-anh.jpg" style="width: 1000px;height: 400px;padding: 100px" alt="First slide">
            </div>
            <div class="carousel-item active">
                <img class="d-block w-100" src="https://intphcm.com/data/upload/mau-banner-dep-chuan.jpg" style="width: 1000px;height: 400px" alt="Second slide">
            </div>

        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
@endsection
