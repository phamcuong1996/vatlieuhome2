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

    public function editOrder(Request $request, $id)
    {
        $id = $request->id;
        $order = Order::find($id);
        $product = Product::find($id);
        $orderDetails = OrderDetail::where('order_id', $order->id)->with('product')->get();

        return view('admin.orders.edit', compact('order', 'orderDetails', 'product',));
    }

    public function confirmed(Request $request)
    {
        $id = $request->id;
        $order = Order::find($id);
        $order->status = Order::STATUS_CONFIRMED;
        $order->save();

        return redirect()->back();
    }

    public function done(Request $request)
    {
        $id = $request->id;
        $order = Order::find($id);
        $order->status = Order::STATUS_DONE;
        $order->save();

        return redirect()->back();
    }

    public function cancel(Request $request)
    {
        $id = $request->id;
        $order = Order::find($id);
        $order->status = Order::STATUS_CANCEL;
        $order->save();

        return redirect()->back();
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $order = Order::find($id);
        $orderData = [
            'full_name' => $data['full_name'],
            'email' => $data['email'],
        ];
        $order->update($orderData);

        foreach($data['quantities'] as $productId => $quantity) {
            $orderDetail = OrderDetail::where([
                'product_id' => $productId,
                'order_id' => $id
            ])->first();

            $orderDetail->update(['quantity' => $quantity]);
        }

        return redirect()->back();
    }

    public function show(Request $request, $id)
    {
        $id = $request->id;
        $order = Order::find($id);
        $product = Product::find($id);
        $orderDetails = OrderDetail::where('order_id', $order->id)->with('product')->get();

        return view('admin.orders.indexorder', compact('order', 'orderDetails', 'product',));
    }

    public function createOrder()
    {
        $items = Product::all(['id', 'name','image','price']);

        return view('admin.orders.create', compact('items'));
    }

    public function storeOrder(Request $request)
    {
        $data = $request->all();
        OrderDetail::create($data);

        return redirect()->back();
    }

    public function destroy(int $id)
    {
        $orderDetail = OrderDetail::find($id);
        $orderDetail->delete();

        return redirect()->back();
    }
}
