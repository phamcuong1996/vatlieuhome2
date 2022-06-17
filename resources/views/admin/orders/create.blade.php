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
                                <select class="form-control" name="product_id" id="product_id">
                                    @foreach($items as $item)
                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                    @endforeach
                            </select>
                            </div>
                            <div class="col-3">
                                <label for="password">Số Lượng</label>
                                <input class="form-control" type="text" name="quantity">
                            </div>
                            <div class="col-3">
                                <label for="password">Giá</label>
                                <select id="price" name="price" class="form-control">
                                    @foreach($orderDetail as $value)
                                        <option value="{{$value->id}}">{{$value->price}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-3">
                                <label for="password">Đơn hàng</label>
                                <input class="form-control" type="text" name="order_id">
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
    <script>
        $('#product_id').on('change', function() {
            alert( this.value );
        });
    </script>
@endsection
