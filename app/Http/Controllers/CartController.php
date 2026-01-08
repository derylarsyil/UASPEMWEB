<?php
namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function add(Product $product)
    {
        Cart::updateOrCreate(
            ['user_id' => Auth::id(), 'product_id' => $product->id],
            ['qty' => \DB::raw('qty + 1')]
        );

        return back()->with('success','Produk masuk keranjang');
    }

    public function index()
    {
        $carts = Cart::where('user_id',Auth::id())->with('product')->get();
        return view('user.cart', compact('carts'));
    }
}
