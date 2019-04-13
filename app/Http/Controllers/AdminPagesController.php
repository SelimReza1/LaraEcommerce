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

    public function product_store(Request $request)
    {
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
}
