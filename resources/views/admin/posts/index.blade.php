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
                <h3 class="card-title">Quản Lý Bài Viết</h3>
                <div class="card-tools"> <a class="btn btn-primary btn-sm" href="/admin/posts/create">
                        <i class="fas fa-folder">
                        </i>
                        Add
                    </a></div>
            </div>

            <div class="card-body">
                <table class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>STT</th>
                        <th>Tiêu Đề</th>
                        <th>Nội Dung Ngắn</th>
                        <th>Danh Mục</th>
                        <th>Ảnh</th>
                        <th>Hành Động</th>
                    </tr>
                    </thead>
                    @foreach ($posts as $post)
                        <tr>
                            <td>{{ $post->id }}</td>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->short_content }}</td>
                            <td>{{ $post->category->name }}</td>
                            <td><img src="{{ $post->image }}" style="width:50px;height:50px"></td>

                            <td>
                                <a class="btn btn-info btn-sm" href="/admin/posts/{{ $post->id }}/edit">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Edit
                                </a>
                                <a class="btn btn-danger btn-sm" href="/admin/posts/{{ $post->id }}/destroy">
                                    <i class="fas fa-trash">
                                    </i>
                                    Delete
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </table>
                {{ $posts->links() }}
            </div>
        </div>
    </div>
@endsection
