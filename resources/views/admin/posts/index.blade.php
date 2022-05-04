@extends('admin.layout')

@section('content')
    <div class="container">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h2 class="text-center">Quản Lý bài viết</h2>
            </div>
            <td>
                <a href="{{ route('posts.create') }}">Thêm Mới</a>
            </td>
            <div class="panel-body">
                <table class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th width="50px">ID</th>
                        <th>title</th>
                        <th>content</th>
                        <th>image</th>
                        <th>category_id </th>
                        <th width="50px">SỬA</th>
                        <th width="50px">XOÁ</th>
                    </tr>
                    </thead>
                    @foreach ($posts as $post)
                        <tr>
                            <td>{{ $post->id }}</td>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->content }}</td>
                            <td>{{ $post->image }}</td>
{{--                            <td>{{ $post->category->name }}</td>--}}
                            <td>
                                <a href="{{ route('posts.edit', $post->id) }}">SỬA</a>
                            </td>
                            <td>
                                <a href="{{ route('posts.destroy', $post->id) }}">XOÁ</a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection

