<div style="width: 600px; margin: 0 auto">
    <div style="text-align: center">
        <h2>Xin chào {{$order->full_name}}</h2>
        <p>Bạn đã đặt hàng tại hệ thống của chúng tôi, Vui lòng kiểm tra lại thông tin của bạn và nhấn vào nút xác nhận
            đơn hàng</p>
        <p>
            <a href="">Xác nhận đơn hàng của bạn</a>
        </p>
    </div>
    @php
        $total = 0;
    @endphp
    @foreach ($orderDetails as $orderDetail)
        @php
            $total += ($orderDetails->quantity * $orderDetails->price );
        @endphp
    @endforeach
    <div class="card-header">
        <h3 class="card-title">Thông Tin Đơn Hàng</h3>
    </div>
    <div>
        <tr>
            <th>{{$order->email}}</th>
            <th>{{$order->phone}}</th>
            <th>{{$order->address}}</th>
            <th>{{$order->note}}</th>
            <th>{{$total}}</th>
        </tr>
    </div>

    <div>
        <button type="submit" class="btn btn-primary">Lưu Lại</button>
    </div>
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
