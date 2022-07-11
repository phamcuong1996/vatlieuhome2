@extends('admin.layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 d-flex flex-column mt-4 mt-md-0">
                <div class="card flex-grow-1 mb-0">
                    <div class="card-body">
                        @error('email')<small class="help-block">{{$message}}</small>@enderror
                        <form action="" method="post" style="text-align: center">
                            @csrf
                            <h2>lấy lại mật khẩu</h2>
                            <p>Vui lòng nhập email mà bạn đã đăng ký tài khoản</p>
                            <div class="form-group">
                                <input type="text" name="email" required="">
                            </div>
                            <button type="submit" class="btn btn-primary mt-4">Lấy lại mật khẩu</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
