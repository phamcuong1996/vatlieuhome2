@extends('admin.layout')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Quản Lý Sản Phẩm</h3>
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
                        <th>Id</th>
                        <th>Code</th>
                        <th>Status</th>
                        <th>Name</th>
                        <th>Image</th>
                        <th>Original_price</th>
                        <th>Price</th>
                        <th>Hành động</th>
                    </tr>
                    </thead>
                    @foreach ($products as $products)
                        <tr>
                            <td>{{ $products->id }}</td>
                            <td>{{ $products->code }}</td>
                            <td>{{ $products->status_label }}</td>
                            <td>{{ $products->name }}</td>
                            <td><img src=/update/{{$products->image}} style="width:50px;height:50px"></td>
                            <td>{{ number_format($products->original_price) }}</td>
                            <td>{{ number_format($products->price) }}</td>
                            <td>
                                <a class="btn btn-info btn-sm" href="/admin/products/{{ $products->id }}/edit">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Edit
                                </a>
                                <a class="btn btn-danger btn-sm" href="/admin/products/{{ $products->id }}/destroy">
                                    <i class="fas fa-trash">
                                    </i>
                                    Delete
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection

