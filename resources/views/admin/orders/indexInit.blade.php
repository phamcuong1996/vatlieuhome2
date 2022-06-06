@extends('admin.layout')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Quản Lý Đơn hàng</h3>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Full Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Total Price</th>
                        <th>Note</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    @foreach ($orders as $order)
                        <tr>
                            <td>{{ $order->id }}</td>
                            <td>{{ $order->full_name }}</td>
                            <td>{{ $order->email }}</td>
                            <td>{{ $order->phone }}</td>
                            <td>{{ $order->address }}</td>
                            <td>{{ number_format($order->total_price)}} VNĐ</td>
                            <td>{{ $order->note }}</td>
                            <td>
                                <a class="btn btn-info btn-sm" href="/admin/orders/{{ $order->id }}/edit">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Edit
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </table>
{{--                {{ $orders->links() }}--}}
            </div>
        </div>
    </div>
@endsection
