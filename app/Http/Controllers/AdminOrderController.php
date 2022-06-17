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
        $orders = Order::where('status', Order::STATUS_INIT)->simplePaginate(3);

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

    public function indexAll()
    {
        $orders = Order::all();

        return view('admin.orders.index', compact('orders'));
    }

    public function editOrder(Request $request, int $id)
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
            'phone' => $data['phone'],
            'address' => $data['address'],
            'note' => $data['note'],
            'total_price' => $data['total_price'],
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

        return view('admin.orders.index', compact('order', ));
    }

    public function createOrder()
    {
        $items = Product::all(['id', 'name','image','price']);
        $orderDetail = OrderDetail::all();

        return view('admin.orders.create', compact('items','orderDetail'));
    }

    public function storeOrder(Request $request )
    {
        $validated = $request->validate([
            'quantity' => 'required',
            'order_id' => 'required',
        ],[
            'quantity.required' => 'Bạn cần nhập số số lượng',
            'order_id.required' => 'Bạn cần nhập đơn hàng',
        ]);
        $data = $request->all();
        OrderDetail::create($data);

        return redirect('admin/orders/index')->with('success','Thêm đơn hàng thành công !');
    }

    public function destroy(int $id)
    {
        $orderDetail = OrderDetail::find($id);
        $orderDetail->delete();

        return redirect()->back()->with('success','Xóa đơn hàng thành công !');
    }
}
