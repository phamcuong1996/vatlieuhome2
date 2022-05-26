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
@endsection
