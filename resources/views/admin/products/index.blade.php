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
                        <th>Số Thứ Tự</th>
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
                            <td width="100px">{{ $pro->id }}</td>
                            <td width="130px">{{ $pro->code }}</td>
                            <td width="100px">{{ $pro->status_label }}</td>
                            <td width="100px">{{ $pro->name }}</td>
                            <td width="40px"><img src=/update/{{$pro->image}} style="width:50px;height:50px"></td>
                            <td width="80px">{{ number_format($pro->price) }}</td>
                            <td width="130px">{{ number_format($pro->original_price) }}</td>
                            <td width="60px">{{ $pro->type }}</td>
                            <td width="100px">
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
