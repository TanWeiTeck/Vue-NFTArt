<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Purchase;
use Illuminate\Support\Facades\Mail;
use App\Mail\PurchaseOrder;


class ProductController extends Controller
{
    public function index() {
        $Product = Product::with('category')->get();
        // dd($Product);
        return view('all', ['product' => $Product]);
    }
    public function index1() {
        $Product = Product::where('category_id',1)->GET();
        return view('art', ['product' => $Product]);
    }

    public function index2() {
        $Product = Product::where('category_id',2)->GET();
        return view('collection', ['product' => $Product]);
    }


    public function payment($id) {
        $Product = Product::find($id);
        return view('payment', ['product' => $Product]);
    }

    public function store(Request $request) {

        $this->validate($request,[
            'id'=>'required',
            'name'=>'required',
            'email'=>'required',
            'contact'=>'required',
            'payment_method'=>'required'
        ]);


        $Purchase = Purchase::create($request->all());
        // dd($Purchase);
        $receiverEmailAddress = ['tanweiteck.twt@gmail.com'];
        Mail::to($receiverEmailAddress)->send(new PurchaseOrder($Purchase));
        return redirect('/')->with('success', 'Congratulations !! Transaction Successful');
    }




// FOR FILTER
    // public function index() {
    //     $Product = Product::where('category_id', 1)->GET();
    //     return view('home', ['product' => $Product]);
    // }
}
