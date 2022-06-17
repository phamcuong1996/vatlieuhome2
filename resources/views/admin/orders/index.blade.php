@extends('admin.layout')

@section('content')
    <div class="container">
        <div class="card">
            <div class="alert alert-success">
                @if(session('success'))
                    {{ session('success') }}
                @endif
            </div>
            <div class="card-header">
                <h3 class="card-title">Quản Lý Đơn hàng</h3>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Họ & Tên</th>
                        <th>Email</th>
                        <th>Điện Thoại</th>
                        <th>Địa Chỉ</th>
                        <th>Tổng Tiền</th>
                        <th>Ghi Chú</th>
                        <th>Trạng Thái</th>
                        <th>Hành Động</th>
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
                            <td>{{ $order ->status}}</td>
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
            </div>
        </div>
    </div>
@endsection
