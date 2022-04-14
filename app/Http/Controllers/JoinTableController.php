<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class JoinTableController extends Controller
{
    public function index() {

        $data = Product::with( relations: 'getCategoryIDRelation')->get();
        dd($data);
        return view('try', ['data' => $data]);
    }
}
