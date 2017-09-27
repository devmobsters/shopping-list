<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();

        return view('home')->with([
            'products' => $products,
        ]);
    }

    public function create()
    {
        return view('addproduct');
    }

    public function store(){
        $product = new Product;
        $product->name = request('productName');
        $product->brand = request('productBrand');
        $product->picture = request('productPictureUrl');
        $product->added_by = Auth::user()->id;
        $product->save();
        return redirect('home');
    }
}
