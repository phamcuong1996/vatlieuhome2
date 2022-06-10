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
                    <label>Giá Gốc (<span class="fa fa-star" style="font-size:10px;color:red"></span>):</label>
                    <input type="text" class="form-control" name="price" placeholder="Nhập giá"
                           value="{{ @$product->price }}">
                </div>
                <div class="col-3">
                    <label>Giá Khuyến Mại (<span class="fa fa-star" style="font-size:10px;color:red"></span>):</label>
                    <input type="text" class="form-control" name="original_price" placeholder="Nhập giá"
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
                    <label>Ảnh:</label>
                    <input type="file" class="form-control" name="file_update" value="{{ @$product->image }}">
                </div>
                <div class="col-3">
                    <label>Danh Mục:</label>
                    <select id="category_id" name="category_id" class="form-control">
                        @foreach($category as $value)
                            <option value="{{$value->id}}">{{$value->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-3">
                    <label for="">Loại Sản Phẩm:</label>
                    <div class="form-control">
                        <label>
                            <input type="radio" name="type" value="1" checked="checked">
                            Hot
                        </label>
                        <label>
                            <input type="radio" name="type" value="2" checked="checked">
                            New
                        </label>
                        <label>
                            <input type="radio" name="type" value="3" checked="checked">
                            Sale
                        </label>
                    </div>
                </div>
                <div class="col-3">
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
            </div>
            <div class="form-group" style="display: flex">
                <div class="col-6">
                    <label>Mô Tả Ngắn(<span class="fa fa-star" style="font-size:10px;color:red"></span>):</label>
                    <textarea name="short_description" class="form-control" id="editor1"
                              placeholder="Nhập mô tả">{{ @$product->short_description }}</textarea>
                    <script>
                        CKEDITOR.replace('editor1');
                    </script>
                </div>
                <div class="col-6">
                    <label>Mô tả Chi Tiết(<span class="fa fa-star" style="font-size:10px;color:red"></span>):</label>
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
