@extends('admin.layout')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Quản Lý Sản Phẩm</h3>
                <div class="card-tools">
                    <a class="btn btn-primary btn-sm" href="/admin/products/create">
                        <i class="fas fa-folder">
                        </i>
                        Add
                    </a>
                </div>
            </div>

            <div class="card-body">
                <table class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Mã Sản Phẩm</th>
                        <th>Trạng Thái</th>
                        <th>Tên Sản Phẩm</th>
                        <th>Ảnh</th>
                        <th>Giá Gốc</th>
                        <th>Giá Khuyến Mại</th>
                        <th>Loại</th>
                        <th>Hành động</th>
                    </tr>
                    </thead>
                    @foreach ($products as $pro)
                        <tr>
                            <td>{{ $pro->id }}</td>
                            <td>{{ $pro->code }}</td>
                            <td>{{ $pro->status_label }}</td>
                            <td>{{ $pro->name }}</td>
                            <td><img src=/update/{{$pro->image}} style="width:50px;height:50px"></td>
                            <td>{{ number_format($pro->price) }}</td>
                            <td>{{ number_format($pro->original_price) }}</td>
                            <td>{{ $pro->type }}</td>
                            <td>
                                <a class="btn btn-info btn-sm" href="/admin/products/{{ $pro->id }}/edit">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Edit
                                </a>
                                <a class="btn btn-danger btn-sm" href="/admin/products/{{ $pro->id }}/destroy">
                                    <i class="fas fa-trash">
                                    </i>
                                    Delete
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </table>
                {{ $products->links() }}
            </div>
        </div>
    </div>
@endsection
