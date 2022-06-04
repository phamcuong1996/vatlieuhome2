@extends('admin.layout')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Quản Lý Đơn hàng</h3>
                <div class="card-tools"> <a class="btn btn-primary btn-sm" href="/admin/products/create">
                        <i class="fas fa-folder">
                        </i>
                        Add
                    </a></div>
            </div>

            <div class="card-body">
                <table class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th width="50px">ID</th>
                        <th>name</th>
                        <th>status</th>
                        <th width="50px">Action</th>
                    </tr>
                    </thead>
                    @foreach ($orders as $order)
                        <tr>
                            <td>{{ $order->id }}</td>
                            <td>{{ $order->full_name }}</td>
                            <td>{{ $order->status }}</td>
                            <td>
                                xxxxx
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>

    </div>
@endsection
