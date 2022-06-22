@extends('admin.layout')
@section('content')
            <div class="container">
                <div class="alert alert-success">
                    @if(session('success'))
                        {{ session('success') }}
                    @endif
                </div>
                <div class="row">
                    <div class="col-md-12 d-flex flex-column mt-4 mt-md-0">
                        <div class="card flex-grow-1 mb-0">
                            <div class="card-body">
                                <form action="{{route('profile')}}" method="post" style="text-align: center">
                                    @csrf
                                    @method('put')
                                    <div class="form-group">
                                        <input type="text" value="{{auth()->user()->email}}" >
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="name" value="{{auth()->user()->name}}">
                                    </div>
                                    <div class="form-group">
                                        <input type="checkbox" name="change_password">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" placeholder="password">
                                    </div>
                                    <div class="form-group">
                                        <a href="{{route('logout')}}">Đăng Xuất</a>
                                    </div>
                                    <button type="submit" class="btn btn-primary mt-4">Cập Nhật</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection
