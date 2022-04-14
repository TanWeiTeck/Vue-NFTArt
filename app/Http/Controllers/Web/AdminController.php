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
        // dd($product);
        return view('admin.home', ['product' => $product]);
    }


    public function add()
{
    return view('admin.addproduct');
}

public function create(Request $request) {
    //Validatetion
    $data = $this->validate($request,[
        // 'id'  => ['required'],
        'category_id'  => 'required',
        'name' => ['string','required'],
        'description' => ['string','required'],
        'price' => ['required', 'numeric'],
        'image' => 'required',

    ]);

    if($request->file('image')){
        $file= $request->file('image');
        $filename= date('YmdHi').$file->getClientOriginalName();
        $file-> move(public_path('public/Image'), $filename);
        $data['image']= $filename;
    }

    Product::create($data);
    // Product::create($request->all());
    return redirect('admin');
}

public function delete($id)
    {
        Product::find($id)->delete();
        return redirect('admin');
    }


// public function edit($id)
// {

//         $data = Product::find($id);
//         return view('admin.edit', ['data' => $data]);
// }

// public function update(Request $request, Telco_Package $Telco_Package)
// {
//     {
//         $this->validate($request, [
//         'service_provider' => 'required',
//         'package_id'  => ['required' ],
//         'internet_speed'  => 'required',
//         'description' => 'required',
//         'price' => ['required', 'integer'],
//         'discount' => 'required',
//         'discounted_price' => ['required', 'integer']
//     ]);

//         $data=Telco_Package::find($request->id);
//         $data->service_provider = $request->service_provider;
//         $data->package_id = $request->package_id;
//         $data->internet_speed = $request->internet_speed;
//         $data->description = $request->description;
//         $data->price = $request->price;
//         $data->discount = $request->discount;
//         $data->discounted_price = $request->discounted_price;

//         $data->save();
//         return redirect('packagelist');
//     }
// }
}






