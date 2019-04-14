<?php

namespace App\Http\Controllers;

use App\Product;
use App\ProductImage;
use Illuminate\Http\Request;
use Image;
class AdminPagesController extends Controller
{
    public function index()
    {
        return view('admin.pages.index');
    }

    public function product_create()
    {
        return view('admin.pages.product.create');
    }
    public function product_edit($id){
        $product = Product::find($id);
        return view('admin.pages.product.edit',compact('product'));
    }
    public function manage_products(){
        $products = Product::orderBy('id', 'desc')->get();
        return view('admin.pages.product.index',compact('products'));
    }

    public function product_store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:155',
            'description' => 'required',
            'price' => 'required',
            'quantity' => 'required',
        ]);
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

        //ProductImage model insert image
        if (count($request->product_image)>0){
            foreach ($request->product_image as $image) {
                $img = time() . '.' . $image->clientExtension();
                $location = public_path('image/products/' . $img);
                Image::make($image)->save($location);

                $product_image = new ProductImage();
                $product_image->product_id = $product->id;
                $product_image->image = $img;
                $product_image->save();

            }
        }
        return redirect()->route('admin.product.create');
    }

    public function product_update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:155',
            'description' => 'required',
            'price' => 'required',
            'quantity' => 'required',
        ]);
        $product = Product::find($id);
        $product->title = $request->title;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->save();


        return redirect()->route('admin.products');
    }
}
