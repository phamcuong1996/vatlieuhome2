@extends('admin.layout')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <form method="post" action="{{ route('users.update', ['id' => $user->id]) }}">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Sửa</h3>
                    </div>
                    <div class="card-body">
                        {{ method_field('PUT') }}
                        @csrf
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input class="form-control" type="text" value="{{ $user->name }}" name="name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input class="form-control" type="text" value="{{ $user->email }}" name="email">
                        </div>
                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input class="form-control" type="text" value="{{ $user->password }}" name="password">
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

