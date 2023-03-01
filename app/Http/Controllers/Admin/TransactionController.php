<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
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
    public function add()
    {
        $products = Product::where('status', 'stock')->get();

        return view('dashboard/transaction-add', compact('products'));
    }

    public function store(Request $request)
    {
        $transaction = new Transaction();
        $transaction->id = 'TRX-'. rand(1,99999999);
        $transaction->customers = $request->customers;
        $transaction->subtotal = $request->subtotal;

        if ($request->products) {
            $transaction->products = implode(",", $request->products);
        }

        $transaction->save();

        return redirect('/')->with('success');
    }
}
