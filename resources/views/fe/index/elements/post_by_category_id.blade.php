<div class="row">
    @foreach ($duAn as $post)
        <div class="col-12 col-sm-6 col-md-6 bg-ranger">
            <div class="card" >
                <div style="display: flex">
                    <div style="margin-right: 20px" >
                        <img style="height: 300px;width: 300px" src="{{ $post->image }}">
                    </div>
                    <div>
                        <h6 href="" class="card-content">{{ $post->title }}</h6>
                        <p class="card-text">{{ $post->created_at }} </p>
                        <p class="card-text">{{ $post->short_content }} </p>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
