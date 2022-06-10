@extends('admin.layout')

@section('content')
    <div class="card">
        <div class="alert alert-success">
            @if(session('success'))
                {{ session('success') }}
            @endif
        </div>
        <div class="card-header">
            <h3 class="card-title">Quản Lý User</h3>
            <div class="card-header">
                <div class="card-tools">
                    <a class="btn btn-primary btn-sm" href="/admin/users/create">
                        <i class="fas fa-folder">
                        </i>
                        Add
                    </a>
                </div>
            </div>
        </div>
        <div class="card-body p-0" style="display: block;">
            <table class="table table-striped projects">
                <thead>
                <tr>
                    <th width="100px">STT</th>
                    <th width="150px">Tên</th>
                    <th width="150px">Email</th>
                    <th width="150px">Hành Động</th>
                </tr>
                </thead>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td style="display: flex">
                            <a class="btn btn-info btn-sm" href="{{ route('admin.users.edit', ['id' => $user->id ]) }}">
                                <i class="fas fa-pencil-alt">
                                </i>
                                Edit
                            </a>
                            <br>
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
            {{$users->links()}}
        </div>
    </div>
@endsection
