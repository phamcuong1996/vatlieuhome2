<div class="card card-primary">
    <div class="card-header">Sửa banner</div>
    <div class="card-body">
        @if ($errors->any())
            <div class="alert alert-default-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form method="post" action="{{ $route }}" enctype="multipart/form-data">
            <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
            <div class="form-group" style="display: flex">
                <div class="col-4">
                    <label>name:</label>
                    <input type="text" class="form-control" name="name" value="{{ @$banner->name }}">
                </div>
                <div class="col-4">
                    <label for="">Trạng Thái:</label>
                    <div class="form-control">
                        <label>
                            <input type="radio" name="status_id" value="1" checked="checked">
                            Hiện
                        </label>
                        <label>
                            <input type="radio" name="status_id" value="0" checked="checked">
                            Ẩn
                        </label>
                    </div>
                </div>
                <div class="col-4">
                    <label>Danh Mục:</label>
                    <select id="category_id" name="category_id" class="form-control">
                        @foreach($category as $value)
                            <option value="{{$value->id}}">{{$value->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="col-4">
                <label>image:</label>
                <input type="file" class="form-control" name="file_update" value="{{ @$banner->image }}">
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>

