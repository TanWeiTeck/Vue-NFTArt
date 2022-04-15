<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Product;

class CarouselController extends Controller

{
    public function index(){
        $product = Product::get();
        return view('welcome', ['product' => $product]);
    }
    public function carousel(Request $request)
    {
        $data = Post::get();
        return response()->json($data);
    }
}
