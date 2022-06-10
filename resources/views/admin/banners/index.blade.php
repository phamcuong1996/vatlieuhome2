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
                <h3 class="card-title">Quản Lý Banner</h3>
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
                        <th width="50px">STT</th>
                        <th width="100px">Trạng Thái</th>
                        <th width="150px">Danh Mục</th>
                        <th width="100px">Tên</th>
                        <th width="100px">Ảnh</th>
                        <th width="100px">Hành Động</th>
                    </tr>
                    </thead>
                    @foreach ($banners as $banner)
                        <tr>
                            <td>{{ $banner->id }}</td>
                            <td>{{ ($banner->status_id ===1)?'Hiện':'Ẩn' }}</td>
                            <td>{{ $banner->category->name }}</td>
                            <td>{{ $banner->name }}</td>
                            <td><img src=/update/{{$banner->image}} style="width:50px;height:50px"></td>
                            <td>
                                <a class="btn btn-info btn-sm" href="/admin/banners/{{ $banner->id }}/edit">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Edit
                                </a>
                                <a class="btn btn-danger btn-sm" href="/admin/banners/{{ $banner->id }}/destroy">
                                    <i class="fas fa-trash">
                                    </i>
                                    Delete
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </table>
                {{ $banners->links() }}
            </div>
        </div>
    </div>
@endsection

