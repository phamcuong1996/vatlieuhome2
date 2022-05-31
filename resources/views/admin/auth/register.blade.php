{{--<form action="{{route('register')}}" method="post">--}}
{{--    @csrf--}}
{{--    <input type="text" name="email" placeholder="email"> <br>--}}
{{--    <input type="text" name="name" placeholder="name"> <br>--}}
{{--    <input type="password" name="password" placeholder="password"> <br>--}}
{{--    <input type="password" name="confirm-password" placeholder="confirm-password"> <br>--}}
{{--    <button type="submit">Dang Ky</button>--}}
{{--</form>--}}

{{--@if(session('success'))--}}
{{--    {{ session('success') }}--}}
{{--@endif--}}

    <!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <title>Stroyka</title>
    <link rel="icon" type="image/png" href="/fe/HTML/default/images/favicon.png">
    <!-- fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i">
    <!-- css -->
    <link rel="stylesheet" href="/fe/HTML/default/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/fe/HTML/default/vendor/owl-carousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="/fe/HTML/default/vendor/photoswipe/photoswipe.css">
    <link rel="stylesheet" href="/fe/HTML/default/vendor/photoswipe/default-skin/default-skin.css">
    <link rel="stylesheet" href="/fe/HTML/default/vendor/select2/css/select2.min.css">
    <link rel="stylesheet" href="/fe/HTML/default/css/style.css">
    <!-- font - fontawesome -->
    <link rel="stylesheet" href="/fe/HTML/default/vendor/fontawesome/css/all.min.css">
    <!-- font - stroyka -->
    <link rel="stylesheet" href="/fe/HTML/default/fonts/stroyka/stroyka.css">
</head>

<body>
<!-- site -->
<div class="site">
    <div class="site__body">
        <div class="block">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 d-flex flex-column mt-4 mt-md-0">
                        <div class="card flex-grow-1 mb-0">
                            <div class="card-body">
                                <h3 class="card-title">Đăng Ký</h3>
                                <form action="{{route('register')}}" method="post" style="text-align: center">
                                    @csrf
                                    <div class="form-group">
                                        <input type="text" name="email" placeholder="email">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="name" placeholder="name">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" placeholder="password">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="confirm-password" placeholder="confirm-password">
                                    </div>
                                    <button type="submit" class="btn btn-primary mt-4">Đăng Ký</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @if(session('success'))
                {{ session('success') }}
            @endif
        </div>
    </div>
</div>
<script src="/fe/HTML/default/vendor/jquery/jquery.min.js"></script>
<script src="/fe/HTML/default/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/fe/HTML/default/vendor/owl-carousel/owl.carousel.min.js"></script>
<script src="/fe/HTML/default/vendor/nouislider/nouislider.min.js"></script>
<script src="/fe/HTML/default/vendor/photoswipe/photoswipe.min.js"></script>
<script src="/fe/HTML/default/vendor/photoswipe/photoswipe-ui-default.min.js"></script>
<script src="/fe/HTML/default/vendor/select2/js/select2.min.js"></script>
<script src="/fe/HTML/default/js/number.js"></script>
<script src="/fe/HTML/default/js/main.js"></script>
<script src="/fe/HTML/default/js/header.js"></script>
<script src="/fe/HTML/default/vendor/svg4everybody/svg4everybody.min.js"></script>
<script>
    svg4everybody();
</script>
</body>

</html>
