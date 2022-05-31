@extends('admin.layout')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Quản Lý Sản Phẩm</h3>
                <div class="card-tools"> <a class="btn btn-primary btn-sm" href="/admin/banners/create">
                        <i class="fas fa-folder">
                        </i>
                        Add
                    </a></div>
            </div>

            <div class="card-body">
                <table class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Status</th>
                        <th>Name</th>
                        <th>Image</th>
                        <th>Hành động</th>
                    </tr>
                    </thead>
                    @foreach ($banners as $banners)
                        <tr>
                            <td>{{ $banners->id }}</td>
                            <td>{{ $banners->status_label }}</td>
                            <td>{{ $banners->name }}</td>
                            <td><img src=/update/{{$banners->image}} style="width:50px;height:50px"></td>
                            <td>
                                <a class="btn btn-info btn-sm" href="/admin/banners/{{ $banners->id }}/edit">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Edit
                                </a>
                                <a class="btn btn-danger btn-sm" href="/admin/banners/{{ $banners->id }}/destroy">
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

