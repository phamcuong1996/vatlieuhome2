<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js" type="text/javascript"></script>
    <style>
        .parent li {
            padding: 0px 70px;
        }
    </style>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
<div id="header" style=" background-color: #f5b325">
    <div class="header-top" style="background: #f8c962; color: black">
        <span style="margin-right: 20px; margin-left: 100px">18 Ngụy Như Kon Tum, Phường Nhân Chính, Quận Thanh Xuân, Thành Phố Hà Nội</span>
        <span style="margin-right: 20px">Email: vatlieuhome@gmail.com</span>
        <span style="margin-right: 20px">Điện thoại: 0934.553.122</span>
    </div>
    <div class="header-main">
        <div class="container">
            <div class="row" style="margin-top: 20px">
                <div class="col-2"><a href="/"><img src="https://vatlieuhome.com/logo.jpg" alt="" width="100px"></a></div>
                <div class="col-6">
                    <div class="input-group mb-3" style="line-height: 100px">
                        <span class="input-group-text" id="basic-addon1">@</span>
                        <input type="text" class="form-control" placeholder="Tên Sản Phẩm" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                </div>
                <div class="col-2" style="display: flex">
                    <div style="margin-right: 10px"><img src="https://media.istockphoto.com/vectors/clipboard-with-checklist-form-line-icon-medical-plan-and-order-vector-id1216271026" alt="" width="30px" height="30px"></div>
                    <div>Kiểm Tra <br> đơn hàng</div>
                </div>
                <div class="col-2">
                    Tư vấn kỹ thuật<br>
                    0934.553.122
                </div>
            </div>
        </div>
    </div>
    <div class="menu">
        <ul class="parent" style="list-style: none; display: flex">
            <li>Danh Mục Sản Phẩm</li>
            <li>Giới Thiệu</li>
            <li>Hệ Thống Đại Lý</li>
            <li>Chính Sách</li>
            <li>Giải Pháp & ý tưởng</li>
{{--            <li><a class="btn btn-primary" href="{{ route('carts.index') }}" role="button">Giỏ Hàng</a></li>--}}
        </ul>
    </div>
</div>
<div class="main-content">
    @yield('content')
</div>
<div id="footer" style="background-color: #f5b325">
    <div class="container">
        <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
            <div class="col d-flex align-items-start">
                <div>
                    <h2>Liên Hệ</h2>
                    <p>18 Ngụy Như Kon Tum, Phường Nhân Chính, Quận Thanh Xuân, Thành Phố Hà Nội</p>
                    <p> vatlieuhome@gmail.com</p>
                    <p>0934.553.122</p>
                    <p> 08:00am - 18:00pm</p>
                </div>
            </div>
            <div class="col d-flex align-items-start">
                <div>
                    <h2>Thông tin</h2>
                    <p>Hệ thống đại lý.</p>
                    <p>Chính sách.</p>
                    <p>Tuyển dụng.</p>
                    <p>Kiểm tra đơn hàng.</p>
                </div>
            </div>
            <div class="col d-flex align-items-start">
                <div>
                    <h2>Kết nối</h2>
                    <i class="fab fa-youtube"></i>
                    <i class="fab fa-facebook"></i>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
