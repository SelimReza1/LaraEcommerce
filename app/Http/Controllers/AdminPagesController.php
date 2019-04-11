<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class AdminPagesController extends Controller
{
    public function index(){
        return view('admin.pages.index');
    }
    public function product_create(){
        return view('admin.pages.product.create');
    }
    public function product_store(Request $request){
        $product = new Product();
        $product->title = $request->title;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->category_id = 1;
        $product->brand_id = 1;
        $product->admin_id = 1;
        $product->slug = str_slug($product->title);
        $product->save();

        return redirect()->route('admin.product.create');
    }
}
