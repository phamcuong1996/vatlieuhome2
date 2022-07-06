@extends('admin.layout1')
@section('content')
    <div class="container">
        <div class="alert alert-success">
            @if(session('error'))
                {{ session('error') }}
            @endif
        </div>
        <div class="row">
            <div class="col-md-12 d-flex flex-column mt-4 mt-md-0">
                <div class="card flex-grow-1 mb-0">
                    <div class="card-body">
                        <form action="{{route('login')}}" method="post" style="text-align: center">
                            @csrf
                            <h2>Vui lòng đăng nhập để vào hệ thống của chúng tôi</h2>
                            <i>Lưu ý: Chỉ admin mới có quyền vào trang quản lý</i>
                            <div class="form-group">
                                <input type="text" name="email">
                            </div>
                            <div class="form-group">
                                <input type="password" name="password">
                            </div>
                            <div class="form-group">
                                <p>Bạn đã quên mật khẩu ?<a href="{{route('forget_pass')}}">Click để lấy lại mật khẩu</a> </p>
                            </div>
                            <button type="submit" class="btn btn-primary mt-4">Đăng Nhập</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
