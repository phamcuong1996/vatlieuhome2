@extends('fe.layout.home')
@section('content')
    @if($carts)
        <div class="cart_wapper">
            @include('products.components.cart_component')
        </div>
    @else
        <h2>Chưa có sản phẩm</h2>
    @endif
    <script >
        $(document).ready(function() {
            $(".cart_update").click(function () {
                alert(123);
            });
        })

    </script>
@endsection
