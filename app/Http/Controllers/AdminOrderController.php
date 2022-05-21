<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use Illuminate\Http\Request;


class AdminOrderController extends Controller
{
    public function indexInit()
    {
        $orders = Order::where('status', Order::STATUS_INIT)->get();

        return view('admin.orders.indexInit', compact('orders'));
    }

    public function indexConfirmed()
    {
        $orders = Order::where('status', Order::STATUS_CONFIRMED)->get();

        return view('admin.orders.indexConfirmed', compact('orders'));
    }

    public function indexDone()
    {
        $orders = Order::where('status', Order::STATUS_DONE)->get();

        return view('admin.orders.indexDone', compact('orders'));
    }

    public function indexCancel()
    {
        $orders = Order::where('status', Order::STATUS_CANCEL)->get();

        return view('admin.orders.indexCancel', compact('orders'));
    }
}
