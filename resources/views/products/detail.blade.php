@extends('fe.layout.home')
@section('content')
    <div class="card container">
        <div class="row">
            <div class="col" style="padding: 30px">
                <div class="card"><img src="{{ $product->image }}" class="card-img-top"
                                       style="width: 500px;height: 500px;text-align: center"></div>
                <h5 style="text-align: center">Mô Tả Chi Tiết:</h5>
                <div class="card"><p>{{ $product->description }}</p></div>
            </div>
            <div class="col" style="padding: 70px">
                <h1>{{ $product->name }}</h1>
                <p>{{ $product->short_description }}</p>
                <div style="display: flex">
                    <h5 style="margin-right: 50px;">Tình trạng: {{ $product->status_label }}</h5>
                    <h5>Mã sản phẩm: {{ $product->code }}</h5>
                </div>
                <div style="display: flex">
                    <div style="margin-right: 50px"><h1 style="color: red">{{ $product->price }}</h1></div>
                    <div><h1 style="text-decoration: line-through">{{ $product->original_price }}</h1></div>
                </div>
                <div style="display: flex;padding: 10px">
                    <div>
                        <input id="product-quantity" class="product-quantity form-control form-control-lg" type="number"
                               min="1" max="100" value="1" style="text-align: center">
                    </div>
                    <div class="product__actions-item product__actions-item--addtocart">
                        <button style="width: 185px" type="button"
                                class="btn btn-primary btn-lg product-card__addtocart"
                                data-id="2">Thêm vào giỏ
                        </button>
                    </div>
                    <button style="width: 185px" type="button"
                            class="btn btn-warning btn-lg product-card__addtocart go-to-cart"
                            data-id="2">Mua ngay
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div>
        <h5>Sản Phẩm Cùng Loại:</h5>

        <script>
            $(document).ready(function () {
                $(".product-card__addtocart").click(function () {
                    $.ajax({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        url: '/orders',
                        dataType : 'json',
                        type: 'POST',
                        data: {
                            product_id: {{ $product->id }},
                            quantity: 4
                        },
                        success:function(response) {
                            console.log(response);
                        }
                    });
                });
            })
        </script>
@endsection