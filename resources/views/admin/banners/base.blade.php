<div class="card card-primary">
    <div class="card-header">Sửa banner</div>
    <div class="card-body">
        <form method="post" action="{{ $route }}" enctype="multipart/form-data">
            <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
            <div class="form-group">
                <div class="form-group">
                    <label>status_id:</label>
                    <input type="text" class="form-control" name="name" value="{{ @$product->status_id}}">
                    {{--                <select id="status_id" name="status_id" class="form-control">--}}
                    {{--                    @foreach(__('constant.products.statuses') as $key => $value)--}}
                    {{--                        <option value="{{ $key }}" {{ @$product->status_id == $key ? 'selected="selected"' : '' }}>{{ $value }}</option>--}}
                    {{--                    @endforeach--}}
                    {{--                </select>--}}
                </div>
            </div>
            <div class="form-group">
                <label>name:</label>
                <input type="text" class="form-control" name="name" value="{{ @$banner->name }}">
            </div>
            <div class="form-group">
                <label>image:</label>
                <input type="file" class="form-control" name="file_update" value="{{ @$banner->image }}">
            </div>
            <div class="form-group">
                <label>category_id:</label>
                <input type="text" class="form-control" name="category_id" value="{{ @$banner->category_id }}">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>

