<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $products = Product::get();

        return view('dashboard/products', compact('products'));
    }

    public function add()
    {
        return view('dashboard/products-add');
    }

    public function edit($id)
    {
        $product = Product::where('id', $id)->first();

        return view('dashboard/products-edit', compact('product'));
    }

    public function store(Request $request) 
    {
        $product = new Product;

        if($request->file('image')){
            $file = $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('products-assets'), $filename);
            $product->image = $filename;
        }

        $product->name   = $request->name;
        $product->status = $request->status;
        $product->price  = $request->price;
        $product->save();

        return redirect('/products')->with('success');
    }

    public function update(Request $request, $id) 
    {
        $product = Product::where('id', $id)->first();
        $product->image = $request->old_image;

        if($request->file('image')){
            $file = $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('products-assets'), $filename);
            $product->image = $filename;
        }

        $product->name   = $request->name;
        $product->status = $request->status;
        $product->price  = $request->price;
        $product->save();

        return redirect('/products')->with('success');
    }
}
