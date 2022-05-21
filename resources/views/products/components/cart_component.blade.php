<div class="carts" data-url="{{route('carts.delete')}}">
    <div class="container">
        <div class="row">
            <table class="table update_cart_url  table-danger" data-url="{{route('carts.update')}}">
                <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Tên Sản phẩm</th>
                    <th scope="col">Số Lượng</th>
                    <th scope="col">Ảnh</th>
                    <th scope="col">Giá</th>
                    <th scope="col">Sub total</th>
                    <th scope="col">Hành Động</th>
                </tr>
                </thead>
                <tbody>
                @php
                    $total = 0;
                @endphp
                @foreach ($carts as $cart)
                    @php
                        $total += ($productsKeyById[$cart['product_id']]->price * $cart['quantity']);
                    @endphp
                    <tr>
                        <td>{{ $cart['product_id'] }}</td>
                        <td>{{ $productsKeyById[$cart['product_id']]->name }}</td>
                        <td><input type="number" value="{{ $cart['quantity'] }}" min="1" class="quantity"></td>
                        <td><img src="{{ $productsKeyById[$cart['product_id']]->image }}"
                                 style="width: 100px; height: 100px"></td>
                        <td>{{ number_format($productsKeyById[$cart['product_id']]->price)}}VNĐ</td>
                        <td>{{number_format($productsKeyById[$cart['product_id']]->price * $cart['quantity'])}}VNĐ</td>
                        <td>
                            <a href="" data-product_id="{{ $cart['product_id'] }}" class="btn btn-primary cart_update">Cập Nhật</a>
                            <a href="" data-product_id="{{ $cart['product_id'] }}" class="btn btn-danger cart_delete">Xoa</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="row">
        <h2 style="padding: 120px; margin-top: -100px">Tổng Tiền: {{number_format($total)}}VNĐ</h2>
    </div>
</div>
<div class="container card">
    <div class="row">
        <form action="{{ route('orders.save') }}" method="POST">
            @csrf
            <div class="col">
                <div class="input-group mb-3">
                    <input name="full_name" type="text" class="form-control" placeholder="Full Name"> <br>
                </div>
                <div class="input-group mb-3">
                    <input name="email" type="text" class="form-control" placeholder="Email"> <br>
                </div>
                <div class="input-group mb-3">
                    <input name="address" type="text" class="form-control" placeholder="Address"> <br>
                </div>
                <div class="input-group mb-3">
                    <input name="phone" type="text" class="form-control" placeholder="Phone"> <br>
                </div>
                <div class="input-group mb-3">
                    <input name="note" type="text" class="form-control" placeholder="Note"> <br>
                </div>
                <button type="submit" class="btn btn-primary">Dat hang</button>
            </div>
        </form>
        <div class="card-body">
            <table class="cart__totals" style="margin-bottom: 22px">
                <thead>
                <tr>
                    <th colspan="2" class="text-center"><h3>Thông tin đại lý</h3></th>
                </tr>
                <tr>
                    <td style="width: 100px"><b>Tên:</b></td>
                    <td id="agency_name">Công Ty Cổ phần Vật Liệu Home</td>
                </tr>
                <tr>
                    <td><b>Điện thoại:</b></td>
                    <td id="agency_phone">0934.553.122 </td>
                </tr>
                <tr>
                    <td><b>Email:</b></td>
                    <td id="agency_email">vatlieuhome@gmail.com</td>
                </tr>
                <tr>
                    <td><b>Địa chỉ:</b></td>
                    <td id="agency_address">Tầng 7 Số 18 Ngụy Như Kon Tum, P. Nhân Chính, Q. Thanh Xuân, TP. Hà Nội.</td>
                </tr>
                </thead>
            </table>
        </div>
    </div>
</div>