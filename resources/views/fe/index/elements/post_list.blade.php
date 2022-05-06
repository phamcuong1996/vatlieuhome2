<div>
    <div style="display: flex">
        <div class="col-md-6" style="margin-left:-20px;padding: 30px" >
            <img src="https://upanh.tv/images/2021/04/22/Silicon.jpg" style="width:600px;height: 400px">
        </div>
        <div class="col-md-6" style="margin-left:50px;color:blue;padding: 30px" >
            @foreach ($postsList as $post)
                <ul class="card-columns" style="color: blue">
                    <a href="/posts/{{ $post->id }}/detail"><li>{{ $post->title }}</li>
                </ul>
            @endforeach
        </div>
    </div>
</div>

<div class="card" style="padding: 50px">
    <div class= "row" style="text-align: center">
        <div class ="col-12 col-sm-6 col-md-3 bg-warning">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-windows" viewBox="0 0 16 16">
                <path d="M6.555 1.375 0 2.237v5.45h6.555V1.375zM0 13.795l6.555.933V8.313H0v5.482zm7.278-5.4.026 6.378L16 16V8.395H7.278zM16 0 7.33 1.244v6.414H16V0z"/>
            </svg>
            <p>Vận chuyển<br>Vận chuyển nhanh chóng</p>
        </div>
        <div class ="col-12 col-sm-6 col-md-3 bg-danger">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-windows" viewBox="0 0 16 16">
                <path d="M6.555 1.375 0 2.237v5.45h6.555V1.375zM0 13.795l6.555.933V8.313H0v5.482zm7.278-5.4.026 6.378L16 16V8.395H7.278zM16 0 7.33 1.244v6.414H16V0z"/>
            </svg>
            <p>Hỗ trợ 24/7<br>0934.533.122</p>
        </div>
        <div class ="col-12 col-sm-6 col-md-3 bg-warning">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-windows" viewBox="0 0 16 16">
                <path d="M6.555 1.375 0 2.237v5.45h6.555V1.375zM0 13.795l6.555.933V8.313H0v5.482zm7.278-5.4.026 6.378L16 16V8.395H7.278zM16 0 7.33 1.244v6.414H16V0z"/>
            </svg>
            <p>100% chính hãng<br>Vận chuyển luôn đảm bảo</p>
        </div>
        <div class ="col-12 col-sm-6 col-md-3 bg-danger">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-windows" viewBox="0 0 16 16">
                <path d="M6.555 1.375 0 2.237v5.45h6.555V1.375zM0 13.795l6.555.933V8.313H0v5.482zm7.278-5.4.026 6.378L16 16V8.395H7.278zM16 0 7.33 1.244v6.414H16V0z"/>
            </svg>
            <p>Khuyến mãi<br>Nhiều khuyến mãi</p>
        </div>
    </div>
</div>
