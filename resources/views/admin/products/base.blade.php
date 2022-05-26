<div class="card card-primary">
    <div class="card-header">Sửa sản phẩm</div>
    <div class="card-body">
        <form method="post" action="{{ $route }}">
            <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
            <div class="form-group">
                <label>Code:</label>
                <input type="text" class="form-control" name="code" value="{{ @$product->code }}">
            </div>
            <div class="form-group">
                <label>status_id:</label>
                <input type="text" class="form-control" name="name" value="{{ @$product->status_id}}">
{{--                <select id="status_id" name="status_id" class="form-control">--}}
{{--                    @foreach(__('constant.products.statuses') as $key => $value)--}}
{{--                        <option value="{{ $key }}" {{ @$product->status_id == $key ? 'selected="selected"' : '' }}>{{ $value }}</option>--}}
{{--                    @endforeach--}}
{{--                </select>--}}
            </div>
            <div class="form-group">
                <label>Name:</label>
                <input type="text" class="form-control" name="name" value="{{ @$product->name }}">
            </div>
            <div class="form-group">
                <label>image:</label>
                <input type="text" class="form-control" name="image" value="{{ @$product->image }}">
            </div>
            <div class="form-group">
                <label>original_price:</label>
                <input type="text" class="form-control" name="original_price" value="{{ @$product->original_price }}">
            </div>
            <div class="form-group">
                <label>Price:</label>
                <input type="text" class="form-control" name="Price" value="{{ @$product->Price }}">
            </div>
            <div class="form-group">
                <label>category_id:</label>
                <input type="text" class="form-control" name="category_id" value="{{ @$product->category_id }}">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
