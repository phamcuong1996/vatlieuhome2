@extends('admin.layout')

@section('content')
    <a class="btn btn-primary" href="{{ route('admin.users.create') }}">Thêm Mới</a>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Quản Lý User</h3>
        </div>

        <div class="card-body p-0" style="display: block;">
            <table class="table table-striped projects">
                <thead>
                <tr>
                    <th width="50px">ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th width="50px">Action</th>
                </tr>
                </thead>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            <a class="btn btn-info btn-sm" href="{{ route('admin.users.edit', ['id' => $user->id ]) }}">
                                <i class="fas fa-pencil-alt">
                                </i>
                                Edit
                            </a>
                            <form action="{{ route('admin.users.destroy', ['id' => $user->id ]) }}" method="post">
                                @csrf
                                {{ method_field('DELETE') }}
                                <button class="btn btn-danger btn-sm" type="submit">
                                    <i class="fas fa-trash">
                                    </i>
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection
