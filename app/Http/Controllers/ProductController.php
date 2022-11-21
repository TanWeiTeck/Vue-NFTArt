<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Purchase;
use Illuminate\Support\Facades\Mail;
use App\Mail\PurchaseOrder;


class ProductController extends Controller
{
    public function index()
    {
        $product = Product::with('category')->get();
        return view('all', ['product' => $product]);
    }
    public function index1()
    {
        $product = Product::where('category_id', 1)->get();
        return view('art', ['product' => $product]);
    }

    public function index2()
    {
        $product = Product::where('category_id', 2)->get();
        return view('collection', ['product' => $product]);
    }

    public function payment($id)
    {
        $product = Product::find($id);
        return view('payment', ['product' => $product]);
    }

    public function store(Request $request)
    {

        $this->validate($request, [
            'id' => 'required',
            'name' => 'required',
            'email' => 'required',
            'contact' => 'required',
            'payment_method' => 'required'
        ]);


        $purchase = Purchase::create($request->all());
        // dd($Purchase);
        $receiverEmailAddress = ['tanweiteck.twt@gmail.com'];
        Mail::to($receiverEmailAddress)->send(new PurchaseOrder($purchase));
        return redirect('/')->with('success', 'Congratulations !! Transaction Successful');
    }
}
