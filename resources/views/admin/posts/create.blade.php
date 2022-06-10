@extends('admin.layout')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <form method="post" action="{{ route('admin.posts.store') }}" enctype="multipart/form-data">
                <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Thêm mới</h3>
                    </div>
                    <div class="card-body">
                        @csrf
                        <div class="form-group" style="display: flex">
                            <div class="col-4">
                                <label for="name">Tiều Đề:</label>
                                <input class="form-control" type="text" name="title">
                            </div>
                            <div class="col-4">
                                <label>Ảnh:</label>
                                <input type="file" class="form-control" name="file_update" value="{{ @$posts->image }}">
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
                        <div class="form-group" style="display: flex">
                            <div class="col-6">
                                <label>Nội Dung Ngắn(<span class="fa fa-star" style="font-size:10px;color:red"></span>):</label>
                                <textarea name="short_description" class="form-control" id="editor1"
                                          placeholder="Nhập mô tả">{{ @$posts->short_content }}</textarea>
                                <script>
                                    CKEDITOR.replace('editor1');
                                </script>
                            </div>
                            <div class="col-6">
                                <label>Nội Dung(<span class="fa fa-star" style="font-size:10px;color:red"></span>):</label>
                                <textarea name="short_description" class="form-control" id="editor2"
                                          placeholder="Nhập mô tả">{{ @$posts->content }}</textarea>
                                <script>
                                    CKEDITOR.replace('editor2');
                                </script>
                            </div>
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


