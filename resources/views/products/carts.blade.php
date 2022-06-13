@extends('fe.layout.home')
@section('content')
    @if($carts)
        <div class="cart_wapper">
            @include('products.components.cart_component')
        </div>
    @else
        <h4 style="text-align: center">Chưa có sản phẩm nào được thêm vào giỏ hàng</h4>
    @endif
    <script >
        $(document).ready(function() {
            $(".cart_update").click(function () {
                alert(123);
            });
        })

    </script>
@endsection
