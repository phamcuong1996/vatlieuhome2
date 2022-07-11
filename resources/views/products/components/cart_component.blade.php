<div class="carts" data-url="{{route('carts.delete')}}">
    <br>
    <div class="container">
        <div class="row">
            <table class="table update_cart_url  table-danger" data-url="{{route('carts.update')}}">
                <thead>
                <tr>
                    <th scope="col">STT</th>
                    <th scope="col">Tên Sản phẩm</th>
                    <th scope="col">Ảnh</th>
                    <th scope="col">Giá</th>
                    <th scope="col">Số Lượng</th>
                    <th scope="col">Tổng Tiền</th>
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
                        <td><img src="{{ $productsKeyById[$cart['product_id']]->image }}"
                                 style="width: 100px; height: 100px"></td>
                        <td>{{ number_format($productsKeyById[$cart['product_id']]->price)}}VNĐ</td>
                        <td><input type="number" oninput="validity.valid||(value='')" value="{{ $cart['quantity'] }}" min="1" class="quantity"></td>
                        <td>{{number_format($productsKeyById[$cart['product_id']]->price * $cart['quantity'])}}VNĐ</td>
                        <td>
                            <a href="" data-product_id="{{ $cart['product_id'] }}" class="btn btn-primary cart_update" style="margin-right: 10px;">Cập Nhật</button>
                            <a href="" data-product_id="{{ $cart['product_id'] }}" class="btn btn-danger cart_delete">Xóa</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="row">
            <h5 style="margin-top: 20px; margin-left:550px;color: red">Tổng tiền cần thanh toán: {{number_format($total)}}VNĐ</h5>
        </div>
        <br>
    </div>
</div>
<div class="container card">
    @if ($errors->any())
        <div class="alert alert-default-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="row" style="display: flex">
        <div class="col-5">
        <form action="{{ route('orders.save') }}" method="POST">
            @csrf
            <div class="auto" style="padding: 30px">
                <div class="row mt-2">
                    <label class="col-4" >Tên (<span class="fa fa-star" style="font-size:10px;color:red"></span>):</label>
                    <input name="full_name" type="text" class="form-control col-8" placeholder="Vui lòng Nhập" required=""> <br>
                </div >
                <div class="row mt-2">
                    <label class="col-4">Email (<span class="fa fa-star" style="font-size:10px;color:red"></span>):</label>
                    <input name="email" type="text" class="form-control col-8" placeholder="Vui lòng Nhập" required="" > <br>
                </div>
                <div class="row mt-2">
                    <label class="col-4">Địa Chỉ (<span class="fa fa-star" style="font-size:10px;color:red"></span>):</label>
                    <input name="address" type="text" class="form-control col-8" placeholder="Vui lòng Nhập" required="" > <br>
                </div>
                <div class="row mt-2">
                    <label class="col-4">Điện Thoại (<span class="fa fa-star" style="font-size:10px;color:red"></span>):</label>
                    <input name="phone" type="text" class="form-control col-8" placeholder="Vui lòng Nhập" required="" > <br>
                </div>
                <div class="row mt-2">
                    <label class="col-4">Ghi Chú (<span class="fa fa-star" style="font-size:10px;color:red"></span>):</label>
                    <input name="note" type="text" class="form-control col-8" placeholder="Vui lòng Nhập" required="" > <br>
                </div>
                <div class="row mt-2">
                    <label class="col-4">Tỉnh/TP:</label>
                    <select id="province" name="province" class="form-control col-8 choose province">
                        <option value="">--Chọn Tỉnh/TP--</option>
                        @foreach($province as $pro)
                            <option value="{{$pro->id}}">{{$pro->_name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="row mt-2">
                    <label class="col-4">Quận, huyện:</label>
                    <select id="district" name="district" class="form-control col-8 choose district quanhuyen">
                        <option value="">--Chọn Quận/Huyện--</option>

                    </select>
                </div>
                <div class="row mt-2">
                    <label class="col-4">Thôn, xã:</label>
                    <input id="ward" name="ward" class="form-control col-8 ward" placeholder="Số nhà, thôn, xóm">
                </div>
                <button type="submit" class="btn btn-primary">Đặt Hàng</button>
            </div>
        </form>
            </div>
        <div class="col-7">
           <div style="padding: 30px">
               <table class="cart__totals" style="margin-bottom: 22px">
                   <thead>
                   <tr>
                       <th colspan="2" class="text-center"><h3>Thông tin đại lý</h3></th>
                   </tr>
                   <tr>
                       <td><b>Tên:</b></td>
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
                       <td id="agency_address">Tầng 7 Số 18 Ngụy Như, P. Nhân Chính, Q. Thanh Xuân, TP. Hà Nội.</td>
                   </tr>
                   <tr>
                       <td><img src="https://dplusvn.com/wp-content/uploads/2020/01/hinh-anh-van-phong-cong-ty-seongon-2.jpg" style="width: 300px;height: 200px"></td>
                   </tr>
                   </thead>
               </table>
           </div>
        </div>
    </div>
</div>
