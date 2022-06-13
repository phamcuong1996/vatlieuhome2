@extends('fe.layout.home')
@section('content')
    @if($carts)
        <div class="cart_wapper">
            @include('products.components.cart_component')
        </div>
    @else
        <h2>Chưa có sản phẩm</h2>
    @endif
    <script>
        function cartUpdate(event) {
            event.preventDefault();
            let urlUpdateCart = $('.update_cart_url').data('url');
            let product_id = $(this).data('product_id');
            let quantity = $(this).parents('tr').find('input.quantity').val();

            $.ajax({
                type: "GET",
                url: urlUpdateCart,
                data: {product_id: product_id, quantity: quantity},
                success: function (data) {
                    if (data.code === 200) {
                        $('.cart_wapper').html(data.cart_component);
                        alert('Cập Nhật Thành Công');
                    }
                },
                error: function () {

                }
            })
        }

        function cartDelete(event) {
            event.preventDefault();
            let urlDeleteCart = $('.carts').data('url');
            let product_id = $(this).data('product_id');
            $.ajax({
                type: "GET",
                url: urlDeleteCart,
                data: {product_id: product_id},
                success: function (data) {
                    if (data.code === 200) {
                        $('.cart_wapper').html(data.cart_component)
                        alert('Xóa Sản Phẩm Thành Công');
                    }
                },
                error: function () {

                }
            })
        }

        $(function () {
            $(document).on('click', '.cart_update', cartUpdate);
            $(document).on('click', '.cart_delete', cartDelete);
        });
    </script>
@endsection

