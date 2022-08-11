<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\District;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use App\Models\Province;
use App\Models\User;
use App\Models\Ward;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Str;

class OrderController extends Controller
{
    public function index()
    {
        $carts = session()->get('orderItems') ?? [];
        $productIds = collect($carts)->pluck('product_id')->all();
        $productsKeyById = Product::whereIn('id', $productIds)->get()->keyBy('id');
        $categories = Category::where('parent_id', null)->get();
        $province = Province::orderby('id', 'ASC')->get();

        return view('products.carts', compact('carts', 'productsKeyById','categories','province'));
    }

    public function addProduct(Request $request)
    {
        $data = $request->all();
//        $request->session()->put('orderItems', null);
//        return 'true';
        $existingItems = session('orderItems');
        if (!$existingItems) {
            $existingItems = [
                [
                    'product_id' => (int)$data['product_id'],
                    'quantity' => (int)$data['quantity'],
                ]
            ];
        } else {
            $isExistingProduct = false;
            foreach ($existingItems as $key => $item) {
                if ($item['product_id'] == $data['product_id']) {
                    $quantity = $item['quantity'] + $data['quantity'];
                    $existingItems[$key]['quantity'] = $quantity;
                    $isExistingProduct = true;
                    break;
                }
            }

            if (!$isExistingProduct) {
                $existingItems[] = [
                    'product_id' => (int)$data['product_id'],
                    'quantity' => (int)$data['quantity'],
                ];
            }
        }

        $request->session()->put('orderItems', $existingItems);
        return 'khien';
    }

    public function updatecart(Request $request)
    {
        if ($request->product_id && $request->quantity) {
            $carts = session()->get('orderItems');
            foreach ($carts as $key => $item) {
                if ($item['product_id'] == $request->product_id) {
                    $carts[$key]['quantity'] = (int)$request->quantity;
                }
            }
            session()->put('orderItems', $carts);
            $carts = session()->get('orderItems');
            $productIds = collect($carts)->pluck('product_id')->all();
            $productsKeyById = Product::whereIn('id', $productIds)->get()->keyBy('id');
            $province = Province::orderby('id', 'ASC')->get();
            $cartComponent = view('products.components.cart_component', compact('carts', 'productsKeyById','province'))->render();

            return response()->json(['cart_component' => $cartComponent, 'code' => 200], 200);
        }
    }

    public function deletecart(Request $request)
    {
        if ($request->product_id) {
            $carts = session()->get('orderItems');
            foreach ($carts as $key => $item) {
                if ($item['product_id'] == $request->product_id) {
                    unset($carts[$key]);
                }
            }
            session()->put('orderItems', $carts);
            $carts = session()->get('orderItems');
            $productIds = collect($carts)->pluck('product_id')->all();
            $productsKeyById = Product::whereIn('id', $productIds)->get()->keyBy('id');
            $province = Province::orderby('id', 'ASC')->get();
            $cartComponent = view('products.components.cart_component', compact('carts', 'productsKeyById','province'))->render();

            return response()->json(['cart_component' => $cartComponent, 'code' => 200], 200);
        }
    }

    public function save(Request $request)
    {
        $validated = $request->validate([
            'full_name' => 'required',
            'email' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'note' => 'required',
        ],[
            'full_name.required' => 'Bạn cần nhập Tên',
            'email.required' => 'Bạn cần nhập email',
            'address.required' => 'Bạn cần nhập địa chỉ',
            'phone.required' => 'Bạn cần nhập điện thoại',
            'note.required' => 'Bạn cần nhập ghi chú'
        ]);

        $carts = session()->get('orderItems');
        $total = 0;
        $productIds = collect($carts)->pluck('product_id')->all();
        $productsKeyById = Product::whereIn('id', $productIds)->get()->keyBy('id');
        foreach ($carts as $item) {
            $total += $item['quantity'] * $productsKeyById[$item['product_id']]->price;
        }
        $data['full_name'] = $request['full_name'];
        $data['email'] = $request['email'];
        $data['address'] = $request['address'];
        $data['phone'] = $request['phone'];
        $data['note'] = $request['note'];
        $data['total_price'] = $total;
        $data['status'] = Order::STATUS_INIT;
        $data['token'] = strtoupper(Str::random(20));
        $order = Order::create($data);

        foreach ($carts as $item) {
            $detailData = [];
            $detailData['product_id'] = $item['product_id'];
            $detailData['price'] = $productsKeyById[$item['product_id']]->price;
            $detailData['quantity'] = $item['quantity'];
            $detailData['order_id'] = $order->id;

            $orderDetails= OrderDetail::create($detailData);
        }

        //gui Email
        Mail::send('emails.order', compact('order','orderDetails'), function ($email) use($order){
            $email->subject('VatLieuHome-Shop');
            $email->to($order->email,$order->name);
        });
        $request->session()->forget('orderItems');

        return redirect('/')->with('success','Bạn đã đặt hàng thành công !');
    }

    public function accept(Order $order, $token)
    {
        if ($order->token === $token) {
            $order->update(['status' => 2]);
            Mail::send('emails.order_accepted', compact('order'), function ($email) use ($order) {
                $email->subject('VatLieuHome-Shop');
                $email->to($order->email,$order->name);
            });
            return 'Bạn đã xác nhận đơn hàng thành công ! ';

        } else {
            Mail::send('emails.order_accepted', compact('order',), function ($email) use ($order) {
                $email->subject('VatLieuHome-Shop');
                $email->to($order->email, $order->name);
            });
        }
    }

    public function selectDelivery(Request $request)
    {
        $data = $request->all();

        return District::where('_province_id', $data['id'])->orderby('id', 'ASC')->get();
    }

}
