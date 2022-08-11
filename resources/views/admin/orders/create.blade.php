@extends('admin.layout')
@section('content')
    <div class="row">
        <div class="col-md-12">
            @if ($errors->any())
                <div class="alert alert-default-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="post" action="{{ route('admin.orders.store') }}">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Thêm mới</h3>
                    </div>
                    <div class="card-body">
                        @csrf
                        <div class="form-group" style="display: flex">
                            <div class="col-3">
                                <label for="name">Tên Sản Phẩm:</label>
                                <select class="form-control product_id" name="product_id" id="product_id">
                                    @foreach($items as $key => $item)
                                    <option data-key="{{$key}}" value="{{$item->id}}">{{$item->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-3">
                                <label for="price">Giá</label>
                                <input class="form-control price" type="text" name="price">
                            </div>
                            <div class="col-3">
                                <label for="password">Số Lượng</label>
                                <input class="form-control" type="text" name="quantity">
                            </div>
                            <div class="col-3">
                                <label for="password">Đơn hàng</label>
                                <input class="form-control" type="text" name="order_id" value="{{$order->id}}" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Lưu Lại</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#product_id').change(function () {
                let key = $('option:selected').attr('data-key');
                alert(key);
            })
        })
    </script>
@endsection
