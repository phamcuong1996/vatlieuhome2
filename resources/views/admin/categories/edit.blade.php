@extends('admin.layout')
@section('content')

    <div class="row">
        <div class="col-md-12">
            <form method="post" action="{{ route('admin.categories.update', $categories->id) }}">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Sửa</h3>
                    </div>
                    <div class="card-body">
                        {{ method_field('PUT') }}
                        @csrf
                        <div class="form-group">
                            <label for="email">Content:</label>
                            <input class="form-control" value="{{ $categories->name }}" type="text" name="name">
                        </div>
                        <div class="form-group">
                            <label for="password">Category_id:</label>
                            <input class="form-control" value="{{ $categories->parent_id }}" type="text" name="parent_id">
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


