@extends('admin.layout')
@section('content')
            <div class="container">
                <div class="row">
                    <div class="col-md-12 d-flex flex-column mt-4 mt-md-0">
                        <div class="card flex-grow-1 mb-0">
                            <h4 style="text-align: center">Vui Lòng Đăng Ký tài Khoản Admin</h4>
                            <div class="card-body">
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
@endsection
