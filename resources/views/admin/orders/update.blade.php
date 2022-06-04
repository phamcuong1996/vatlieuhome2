@extends('admin.layout')
@section('content')

    <div class="row">
        <div class="col-md-12">
            <form method="post" action="{{ route('admin.orders.update', $order->id) }}">
                <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Sửa</h3>
                    </div>
                    <div class="card-body">
                        {{ method_field('PUT') }}
                        @csrf
                        <div class="form-group">
                            <label for="name">Full Name:</label>
                            <input class="form-control" value="{{ $order->full_name }}" type="text" name="full_name">
                        </div>
                        <div class="form-group">
                            <label for="email">Phone:</label>
                            <input class="form-control" value="{{ $order->phone }}" type="text" name="phone">
                        </div>
                        <div class="form-group">
                            <label for="password">Email</label>
                            <input class="form-control" value="{{ $order->email }}" type="text" name="email">
                        </div>
                        <div class="form-group">
                            <label for="password">Address:</label>
                            <input class="form-control" value="{{ $order->address }}" type="text" name="address">
                        </div>
                        <div class="form-group">
                            <label for="password">Total Price:</label>
                            <input class="form-control" value="{{ $order->total_price }}" type="text" name="total_price">
                        </div>
                        <div class="form-group">
                            <label for="password">Note:</label>
                            <input class="form-control" value="{{ $order->note }}" type="text" name="note">
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
