<div class="card card-primary">
    <div class="card-header">Sửa banner</div>
    <div class="card-body">
        <form method="post" action="{{ $route }}" enctype="multipart/form-data">
            <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
            <div class="form-group">
                <label>Name:</label>
                <textarea name="name" class="form-control" id="editor1" >{{ @$banner->name }}</textarea>
                <script>
                    CKEDITOR.replace( 'editor1' );
                </script>
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

