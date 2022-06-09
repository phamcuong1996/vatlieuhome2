<div class="card card-primary">
    <div class="card-header">Sửa sản phẩm</div>
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
            <p class="zid_regform_notice">Những thông tin có đánh dấu (<span class="fa fa-star"
                                                                             style="font-size:10px;color:red"></span>)
                là bắt buộc nhập.</p>
            <div class="form-group" style="display: flex">
                <div class="col-3">
                    <label>Tên (<span class="fa fa-star" style="font-size:10px;color:red"></span>):</label>
                    <input type="text" class="form-control" name="name" placeholder="Nhập tên"
                           value="{{ @$product->name }}">
                </div>
                <div class="col-3">
                    <label>Giá Khuyến Mại (<span class="fa fa-star" style="font-size:10px;color:red"></span>):</label>
                    <input type="text" class="form-control" name="original_price" placeholder="Nhập giá"
                           value="{{ @$product->original_price }}">
                </div>
                <div class="col-3">
                    <label>Giá Khuyến Mại (<span class="fa fa-star" style="font-size:10px;color:red"></span>):</label>
                    <input type="text" class="form-control" name="price" placeholder="Nhập giá"
                           value="{{ @$product->original_price }}">
                </div>
                <div class="col-3">
                    <label>Mã Sản Phẩm (<span class="fa fa-star" style="font-size:10px;color:red"></span>):</label>
                    <input type="text" class="form-control" name="code" placeholder="Nhập mã"
                           value="{{ @$product->code }}">
                </div>
            </div>
            <div class="form-group" style="display: flex">
                <div class="col-3">
                    <label>Ảnh (<span class="fa fa-star" style="font-size:10px;color:red"></span>):</label>
                    <input type="file" class="form-control" name="file_update" value="{{ @$product->image }}">
                </div>
                <div class="col-3">
                    <label>Loại Sản Phẩm (<span class="fa fa-star" style="font-size:10px;color:red"></span>):</label>
                    <select id="category_id" name="category_id" class="form-control">
                        @foreach($products as $value)
                            <option value="{{$value->id}}">{{$value->type}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-3">
                    <label>Danh Mục (<span class="fa fa-star" style="font-size:10px;color:red"></span>):</label>
                    <select id="category_id" name="category_id" class="form-control">
                        @foreach($category as $value)
                            <option value="{{$value->id}}">{{$value->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-3">
                    <label>Trạng Thái:</label>
                    <select id="status_id" name="status_id" class="form-control">
                        @foreach($products as $value)
                            <option value="{{$value->id}}">{{$value->status}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group" style="display: flex">
                <div class="col-6">
                    <label>Mô Tả Ngắn:</label>
                    <textarea name="short_description" class="form-control" id="editor1"
                              placeholder="Nhập mô tả">{{ @$product->short_description }}</textarea>
                    <script>
                        CKEDITOR.replace('editor1');
                    </script>
                </div>
                <div class="col-6">
                    <label>Mô tả Chi Tiết:</label>
                    <textarea name="description" class="form-control" id="editor2"
                              placeholder="Nhập mô tả">{{ @$product->description }}</textarea>
                    <script>
                        CKEDITOR.replace('editor2');
                    </script>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
