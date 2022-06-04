@extends('admin.layout')
@section('content')
    <form method="post" action="{{ route('admin.orders.update', $order->id) }}">
        {{ method_field('PUT') }}
        @csrf
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title"> Thông Tin Chi Tiết Đơn Hàng</h3>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Image</th>
                        <th>Quantity</th>
                        <th>price</th>
                        <th><a class="btn btn-primary btn-sm" href="{{ route('admin.orders.create') }}">
                                <i class="fas fa-pencil-alt">
                                </i>
                                Add
                            </a></th>
                    </tr>
                    </thead>
                    @php
                        $total = 0;
                    @endphp
                    @foreach ($orderDetails as $orderDetail)
                        <tr>
                            <td>
                                <div class="form-group">
                                    <span class=""> {{ $orderDetail->product->name }}</span>
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <img src="{{ $orderDetail->product->image }}" alt="User Image" style="width: 100px">
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="quantities[{{ $orderDetail->product->id}}]" value="{{ $orderDetail->quantity }}">
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <span>{{number_format($orderDetail->price)}} VNĐ</span>
                                </div>
                            </td>
                            <td>
                                <a class="btn btn-info btn-sm" href="{{ route('admin.orders.destroy', $orderDetail->id) }}">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Delete
                                </a>
                            </td>
                        </tr>
                        @php
                            $total += ($orderDetail->quantity * $orderDetail->price );
                        @endphp
                    @endforeach
                    <h2>Tổng Tiền: {{number_format($total)}}VNĐ</h2>
                </table>
            </div>

            <br>

            <div class="card-header">
                <h3 class="card-title">Thông Tin Đơn Hàng</h3>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="name">Full Name:</label>
                    <input class="form-control" value="{{ $order->full_name }}" type="text" name="full_name">

                    <label for="name">Email:</label>
                    <input class="form-control" value="{{ $order->email}}" type="text" name="email">

                    <label for="name">Phone:</label>
                    <input class="form-control" value="{{ $order->phone }}" type="text" name="phone">

                    <label for="name">Address:</label>
                    <input class="form-control" value="{{ $order->address }}" type="text" name="address">

                    <label for="name">Price:</label>
                    <input class="form-control" disabled="disabled" value="{{ $order->total_price }}">

                    <label for="name">Note:</label>
                    <input class="form-control" value="{{ $order->note }}" type="text" name="note">
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
    @if($order->status == 1)
        <form method="post" action="{{ route('orders.confirmed', $order->id) }}">
            @csrf
            <button type="submit" class="btn btn-danger">Xác nhận</button>
        </form>
    @elseif ($order->status == 2)
        <form method="post" action="{{ route('orders.done', $order->id) }}">
            @csrf
            <button type="submit" class="btn btn-danger">Hoàn thành</button>
        </form>
    @endif
    @if ($order->status == 1 || $order->status == 2)
        <form method="post" action="{{ route('orders.cancel', $order->id) }}">
            @csrf
            <button style="margin-top: 20px" type="submit" class="btn btn-danger">Hủy</button>
        </form>
        @endif
        </div>
        </div>

@endsection
