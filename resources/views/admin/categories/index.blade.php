@extends('admin.layout')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Quản Lý Bài Viết</h3>
                <div class="card-tools">
                    <a class="btn btn-primary btn-sm" href="/admin/categories/create">
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
                        <th>Id</th>>
                        <th>Name</th>
                        <th>Hành động</th>
                    </tr>
                    </thead>
                    @foreach ($categories as $categories)
                        <tr>
                            <td>{{ $categories->id }}</td>
                            <td>{{ $categories->name }}</td>
                            <td>{{ $categories->parent_is }}</td>
                            <td>
                                <a class="btn btn-info btn-sm" href="/admin/categories/{{ $categories->id }}/edit">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Edit
                                </a>
                                <a class="btn btn-danger btn-sm" href="/admin/categories/{{ $categories->id }}/destroy">
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
