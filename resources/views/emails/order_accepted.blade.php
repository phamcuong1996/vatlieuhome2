<div style="width: 600px; margin: 0 auto">
    <div style="text-align: center">
        <h2>Xin chào {{$order->full_name}}</h2>
        <p>Bạn đã xác nhận đơn hàng thành công. Chúng tôi sẽ giao hàng cho bạn sớm nhất</p>
        <p>VatLieuHome-Shop chân thành cảm ơn bạn đã ủng hộ chúng tôi</p>
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


