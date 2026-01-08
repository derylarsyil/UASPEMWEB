<?php

namespace App\Http\Controllers;

use App\Models\Product;

class PageController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    // ✅ USER PRODUCT PAGE
    public function product()
    {
        $products = Product::latest()->get(); // AMBIL SEMUA
        return view('pages.product', compact('products'));
    }
}
