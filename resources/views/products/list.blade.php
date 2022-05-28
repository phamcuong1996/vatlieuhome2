@extends('fe.layout.home')
@section('content')
    <div class="card container" style="padding:30px;">
        <h3 style="color: blue">Chống Thấm</h3>
        <div class="row">
            @foreach ($products as $products)
                <div class="col-12 col-sm-6 col-md-3 bg-ranger">
                    <div class="card" >
                        <a href="/products/{{ $products->id }}"><img src="{{ $products->image}}" class="card-img-top">
                        </a>
                        <div class="card-body" style="text-align: center">
                            <h2 href="" class="card-content" >{{ $products->name }}</h2>
                            <h5 class="card-text" style="text-decoration: line-through">{{ $products->price }} </h5>
                            <h5 class="card-text" style="color: red">{{ $products->original_price }}</h5>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
