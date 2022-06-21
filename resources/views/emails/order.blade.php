<div style="width: 600px; margin: 0 auto">
    <div style="text-align: center">
        <h2>Xin chào {{$orderDetail->name}}</h2>
        <p>Bạn đã đặt hàng tại hệ thống của chúng tôi, Vui lòng kiểm tra lại thông tin của bạn và nhấn vào nút xác nhận
            đơn hàng</p>
        <p>
            <a href="">Xác nhận đơn hàng của bạn</a>
        </p>
    </div>
    <form method="post" action="{{ route('admin.orders.update', $order->id) }}">
        {{ method_field('PUT') }}
        @csrf
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title"> Thông Tin Chi Tiết Đơn Hàng</h3>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>Tên SẢn Phẩm</th>
                        <th>Ảnh</th>
                        <th>Số Lượng</th>
                        <th>Giá</th>
                        <th>Hành Động</th>
                    </tr>
                    </thead>
                    @php
                        $total = 0;
                    @endphp
                    @foreach ($orderDetails as $orderDetail)
                        <tr>
                            <td>
                                <div class="form-group">
                                    <span class=""> {{ $orderDetail->product->name }}</span>
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <img src="{{ $orderDetail->product->image }}" alt="User Image" style="width: 100px">
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <input type="number" class="form-control"
                                           name="quantities[{{ $orderDetail->product->id}}]"
                                           value="{{ $orderDetail->quantity }}">
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <span>{{number_format($orderDetail->price)}} VNĐ</span>
                                </div>
                            </td>
                            <td>
                                <a class="btn btn-danger btn-sm"
                                   href="{{ route('admin.orders.destroy', $orderDetail->id) }}">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Xóa
                                </a>
                            </td>
                        </tr>
                        @php
                            $total += ($orderDetail->quantity * $orderDetail->price );
                        @endphp
                    @endforeach
                    <h2>Tổng Tiền: {{number_format($total)}}VNĐ</h2>
                </table>
            </div>

            <br>

            <div class="card-header">
                <h3 class="card-title">Thông Tin Đơn Hàng</h3>
            </div>
            <div class="card-body">
                <div class="form-group" style="display: flex">
                    <div class="col-4">
                        <label for="name">Họ & Tên:</label>
                        <input class="form-control" value="{{ $order->full_name }}" type="text" name="full_name">
                    </div>
                    <div class="col-4">
                        <label for="name">Email:</label>
                        <input class="form-control" value="{{ $order->email}}" type="text" name="email">
                    </div>
                    <div class="col-4">
                        <label for="name">Điện Thoại:</label>
                        <input class="form-control" value="{{ $order->phone }}" type="text" name="phone">
                    </div>
                </div>
                <div class="form-group" style="display: flex">
                    <div class="col-4">
                        <label for="name">Địa Chỉ:</label>
                        <input class="form-control" value="{{ $order->address }}" type="text" name="address">
                    </div>
                    <div class="col-4">
                        <label for="name">Ghi Chú:</label>
                        <input class="form-control" value="{{ $order->note }}" type="text" name="note">
                    </div>
                    <div class="col-4">
                        <label for="name">Giá:</label>
                        <input class="form-control" value="{{($total)}}" name="total_price">
                    </div>
                </div>
                <div>
                    <button type="submit" class="btn btn-primary">Lưu Lại</button>
                </div>
            </div>
        </div>
    </form>
</div>
@if($order->status == 1)
    <form method="post" action="{{ route('orders.confirmed', $order->id) }}">
        @csrf
        <button type="submit" class="btn btn-danger">Xác nhận</button>
    </form>
@elseif ($order->status == 2)
    <form method="post" action="{{ route('orders.done', $order->id) }}">
        @csrf
        <button type="submit" class="btn btn-danger">Hoàn thành</button>
    </form>
@endif
@if ($order->status == 1 || $order->status == 2)
    <form method="post" action="{{ route('orders.cancel', $order->id) }}">
        @csrf
        <button style="margin-top: 20px" type="submit" class="btn btn-danger">Hủy</button>
    </form>
@endif
