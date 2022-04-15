<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Post;



class HomeController extends Controller
{
    public function index(){
        $product = Product::get();

        return view('home', ['product' => $product]);
    }
}


