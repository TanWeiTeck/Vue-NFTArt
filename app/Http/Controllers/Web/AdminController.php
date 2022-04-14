<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class AdminController extends Controller
{
    public function index()
    {
        $product = Product::with('category')->get();
        return view('admin.home', ['product' => $product]);
    }


    public function add()
    {
    return view('admin.addproduct');
    }

    public function create(Request $request) {
    //Validatetion
        $data = $this->validate($request,[
        'category_id'  => 'required',
        'name' => ['string','required'],
        'description' => ['string','required'],
        'price' => ['required', 'numeric'],
        'image' => 'required',

        ]);

        if($request->file('image')){
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('storage/Image'), $filename);
            $data['image']= $filename;
        }

        Product::create($data);
        return redirect('admin');
    }

    public function delete($id)
    {
        Product::find($id)->delete();
        return redirect('admin');
    }

}






