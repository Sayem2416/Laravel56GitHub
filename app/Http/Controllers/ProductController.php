<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\product;
class ProductController extends Controller
{
    public function productAdd(){
    	$category = Category::all();
    	return view('admin.product.product-add',['category'=>$category]);
    }
    public function productEntry(Request $request){
    // dd($request->all());
    	// return view('admin.product.add-product');


    	$product = new product();

    	// dd($request->productPic);

    	

        $product->productName = $request->productName;
        $product->price = $request->price;
        $product->qty = $request->qty;
        $product->productDescription = $request->productDescription;
        $product->productPic = 'pic';
        $product->cat_id = $request->cat_id;
        $product->publicationStatus = $request->productStatus;

        $product->save();

        $lastId = $product->id;

        $picInfo = $request->file('productPic');
        $picName = $lastId.$picInfo->getClientOriginalName();
        $folder = "admin/productUploadPic/";
        $picInfo->move($folder,$picName);
        $picPath = $folder.$picName;

        $picUpdate = Product::find($lastId);
        $picUpdate ->productPic = $picPath;
        $picUpdate -> save();

        return redirect()->back()->with('message','Product Inserted Successfully');
    }
    public function productShow(){
        $product = product::paginate(7);
        // dd($product);

        return view('admin.product.product-show',['product'=>$product]);
    }
     public function productDelete($did){
        $productDelete = product::find($did);
        $productDelete->delete();
        return redirect('/product/show')->with('message','Product Deleted Successfully from Admin Panel');
        
    }
}
