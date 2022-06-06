@extends('admin.layout')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <form method="post" action="{{ route('admin.categories.store') }}">
                <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Thêm mới</h3>
                    </div>
                    <div class="card-body">
                        @csrf
                        <div class="form-group">
                            <label for="name">ID:</label>
                            <input class="form-control" type="text" name="id">
                        </div>
                        <div class="form-group">
                            <label for="email">Name:</label>
                            <input class="form-control" type="text" name="name">
                        </div>
                        <div class="form-group">
                            <label for="password">Parent_id</label>
                            <input class="form-control" type="text" name="parent_id">
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



