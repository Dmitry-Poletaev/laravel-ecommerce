<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin\Product;
use App\Models\Order;
use App\Models\OrderProduct;
use App\Mail\OrderMail;
use App\Mail\OrderInfoMail;
use Cart;
use Gloudemans\Shoppingcart\Cart as ShoppingcartCart;
use Gloudemans\Shoppingcart\Facades\Cart as FacadesCart;
use Illuminate\Support\Facades\Mail;

class CartController extends Controller
{
    public function addToCart(Request $request, $id)
    {
        $product = Product::where('id', $id)->first();
        $cart = [];
        $cart['id'] = $product->id;
        $cart['name'] = $product->name;
        $cart['qty'] = $request->qty;
        $cart['price'] = $product->sale == 0 ? $product->selling_price : $product->discount_price;
        $cart['options']['image'] = $product->image;
        $cart['weight'] = 1;

        Cart::add($cart);
        
        $notification = [
            'messege' => 'Товар добавлен в корзину! ',
            'alert-type' => 'success'
            ];
        return Redirect()->back()->with($notification);
       
    }

    public function showCart()
    {
        $cart = Cart::content();

        return view('pages.cart', compact('cart'));
    }

    public function remove($rowId)
    {
        Cart::remove($rowId);

        $notification = [
            'messege' => 'Товар удален из корзины! ',
            'alert-type' => 'success'
            ];
        return Redirect()->back()->with($notification);
    }

    public function cartUpdate(Request $request)
    {   
        $rowId = $request->id;
        if (isset($request->plus)) {
            $qty = $request->qty + 1;
        }
        if (isset($request->minus)) {
            $qty = $request->qty - 1;
            if ($qty < 1) {
                $qty = 1;
            }

        }
        Cart::update($rowId, $qty);
 
        return Redirect()->back();
    }

    public function checkout()
    {
        $order = Cart::content();

        return view('pages.checkout', compact('order'));
    }


    public function validateOrder($request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|max:100',
            'phone' => 'required|max:20',
        ],
        [
            'name.required' => 'Введите имя!',
            'email.required' => 'Введите корректный email!',
            'phone.required' => 'Введите корректный телефон!',
        ]

        );
    }


    public function saveOrder(Request $request)
    {
        $this->validateOrder($request);

        $order = new Order();
        $order->name = $request->name;
        $order->email = $request->email;
        $order->phone = $request->phone;
        $order->total_price = (int) str_replace(',', '', Cart::subtotal());
        $order->save();
        
        foreach (Cart::content() as $item) {
            $orderProduct = new OrderProduct();
            $orderProduct->order_id = $order->id;
            $orderProduct->product_name = $item->name;
            $orderProduct->quantity = $item->qty;
            $orderProduct->price = $item->qty * $item->price;
            $orderProduct->save();

        }

        Mail::to($order->email)->send(new OrderMail());
        Mail::to('d.poletaev@vorteil-technology.ru')->send(new OrderInfoMail($request));

        Cart::destroy();

        $notification = [
            'messege' => 'Благодарим вас за заказ! Наши менеджеры свяжутся с вами в ближайшее время!',
            'alert-type' => 'success'
            ];
        return redirect()->action('HomeController@index')->with($notification);

    }
}
