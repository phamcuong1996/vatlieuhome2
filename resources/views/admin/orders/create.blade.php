@extends('admin.layout')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <form method="post" action="{{ route('admin.orders.store') }}">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Thêm mới</h3>
                    </div>
                    <div class="card-body">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <select class="form-control" name="product_id" id="product_id">
                                @foreach($items as $item)
                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="email">Image:</label>
                            <select class="form-control" name="item_id">
                                @foreach($items as $key => $item)
                                    <option value="{{$key}}">{{$item->image}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="password">Quantity</label>
                            <input class="form-control" type="text" name="quantity">
                        </div>
                        <div class="form-group">
                            <label for="password">Price:</label>
                            <select class="form-control" name="item_id">
                                @foreach($items as $item)
                                    <option value="{{$item->id}}">{{$item->price}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="password">Order</label>
                            <input class="form-control" type="text" name="order_id">
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Add</button>
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
