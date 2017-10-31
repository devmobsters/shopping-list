<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
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

    public function store(Request $request)
    {
        $product = new Product();
        $this->validate($request, [
            'name' => 'required|unique:products|string',
            'brand' => 'nullable|string',
            'picture' => 'nullable|active_url',
        ]);

        $product->name = $request->get('name');
        $product->brand = $request->get('brand');
        $product->picture = $request->get('picture');
        $product->added_by = Auth::user()->id;
        $product->save();

        return redirect('home');
    }

    public function delete()
    {

    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('editproduct')->with([
            'id' => $product->id,
            'name' =>  $product->name,
            'brand' =>  $product->brand,
            'picture' =>  $product->picture,
        ]);
    }

    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        $this->validate($request, [
            'name' => "required|unique:products,name,{$id},|string",
            'brand' => 'nullable|string',
            'picture' => 'nullable|active_url',
        ]);

        $product->update([
            'name' => $request->get('name'),
            'brand' => $request->get('brand'),
            'picture' => $request->get('picture')
        ]);

        return redirect('home');
    }
}
