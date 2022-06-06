@extends('admin.layout')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <form method="post" action="{{ route('admin.posts.store') }}">
                <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Thêm mới</h3>
                    </div>
                    <div class="card-body">
                        @csrf
                        <div class="form-group">
                            <label for="name">Title:</label>
                            <input class="form-control" type="text" name="title">
                        </div>
                        <div class="form-group">
                            <label for="email">Content:</label>
                            <input class="form-control" type="text" name="content">
                        </div>
                        <div class="form-group">
                            <label for="password">Image</label>
                            <input class="form-control" type="text" name="image">
                        </div>
                        <div class="form-group">
                            <label for="password">Category_id:</label>
                            <input class="form-control" type="text" name="category_id">
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


