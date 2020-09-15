<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderProduct;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function getOrders()
    {
        $orders = Order::get();

        return view('admin.orders.orders', compact('orders'));
    }
    
    public function viewOrder($id)
    {
        $order = DB::table('orders')->where('id', $id)->first();
        $products = DB::table('order_products')->where('order_id', $id)->get();

        return view('admin.orders.order_detail', compact('order', 'products'));
    }

    public function deleteOrder($id)
    {
        DB::table('orders')->where('id', $id)->delete();

        $notification = [
            'messege' => 'Заказ успешно удален! ',
            'alert-type' => 'success'
            ];
        return Redirect()->back()->with($notification);
    }

}
