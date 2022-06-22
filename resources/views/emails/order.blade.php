<div style="width: 600px; margin: 0 auto">
    <div style="text-align: center">
        <h2>Xin chào {{$order->full_name}}</h2>
        <p>Bạn đã đặt hàng tại hệ thống của chúng tôi, Vui lòng kiểm tra lại thông tin của bạn và nhấn vào nút xác nhận
            đơn hàng</p>
        <p>
            <a href="{{route('admin.orders.accept', ['order' => $order->id,'token' =>$order->token])}}"
               style="display: inline-block; background: green; color: white; padding: 7px 25px; font-weight: bold">Xác nhận đơn hàng của bạn</a>
        </p>
    </div>
</div>
        <h3>Thông Tin Đơn Hàng</h3>
        <table border="1" cellspacing="10" style="width: 100%">
            <tr>
                <th>Name</th>
                <td>{{$order->full_name}}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{$order->email}}</td>
            </tr>
            <tr>
                <th>Phone</th>
                <td>{{$order->phone}}</td>
            </tr>
            <tr>
                <th>Address</th>
                <td>{{$order->address}}</td>
            </tr>
            <tr>
                <th>Note</th>
                <td>{{$order->note}}</td>
            </tr>
            <tr>
                <th>Total Price</th>
                <td>{{number_format($order->total_price)}} VND</td>
            </tr>
        </table>
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
