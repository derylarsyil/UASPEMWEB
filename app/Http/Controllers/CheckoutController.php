<?php
namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function checkout()
    {
        $carts = Cart::where('user_id',Auth::id())->with('product')->get();
        return view('user.checkout', compact('carts'));
    }

    public function process()
    {
        $carts = Cart::where('user_id',Auth::id())->with('product')->get();

        $total = $carts->sum(fn($c) => $c->product->price * $c->qty);

        $order = Order::create([
            'user_id' => Auth::id(),
            'total_price' => $total,
            'payment_method' => request('payment_method'),
            'status' => 'pending'
        ]);

        foreach ($carts as $cart) {
            OrderItem::create([
                'order_id' => $order->id,
                'product_id' => $cart->product_id,
                'price' => $cart->product->price,
                'qty' => $cart->qty
            ]);

            $cart->delete();
        }

        return redirect('/home')->with('success','Checkout berhasil');
    }
}
