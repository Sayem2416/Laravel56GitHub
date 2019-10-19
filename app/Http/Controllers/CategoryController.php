<?php

namespace App\Http\Controllers;

use Illuminate\Http\request;
use App\Category;
use DB;

class CategoryController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    
    public function menClothing(){
    	return view('frontEnd.category.menClothing');
    }

    public function womenClothing(){
    	return view('frontEnd.category.womenClothing');
    }

	public function single(){
    	return view('frontEnd.category.single');
    }
    
    public function shortCode(){
    	return view('frontEnd.category.shortCode');
    }

    public function contact(){
        return view('frontEnd.category.contact');
    }

    public function electronics(){
        return view('frontEnd.category.electronics');
    }

    public function checkout(){
        return view('frontEnd.category.checkout');
    }

    public function categoryAdd(){
        return view('admin.category.category-add');
    }

    public function categoryEntry(request $request){
            // return $request ->all(); ati mulotho pree er mothon kaj kore
            // dd($request->all()); ati mulotho pree er mothon kaj kore
    /*
        $category = new Category();
        $category->categoryName = $request->catName;
        $category->categoryDescription = $request->catDescription;
        $category->publicationStatus = $request->pstatus;

        $category->save();
    */
        DB::table('categories')->insert([
            'categoryName'=>$request->catName,
            'categoryDescription'=>$request->catDescription,
            'publicationStatus'=>$request->pstatus,
        ]);





        /*
            ============Nicher 4babei return message/flash message dewa jay=============
        */
            // return 'Category Inserted Successfully';

            // return redirect()->back();

            // return redirect('/category/add')->with('message','Yes,Category Inserted Successfully');

            return redirect()->back()->with('message','Yes,Category Inserted Successfully');


    }

    public function categoryShow(){
        $categories = Category::all();
        // dd($categories);

        return view('admin.category.category-show',['categories'=>$categories]);
    }

    public function categoryEdit($x){
        $categoryById = Category::where('id',$x)->first();

        return view('admin.category.category-edit',['categoryById'=>$categoryById]);
    }

    public function categoryUpdate(request $request){
        // dd($request->all());

        $category = Category::find($request->catId);

        $category->categoryName = $request->catName;
        $category->categoryDescription = $request->catDescription;
        $category->publicationStatus = $request->pstatus;

        $category->save();

        return redirect('/category/show')->with('message','Category Updated Successfully');

    }
    
    public function categoryDelete($did){
        $categoryDelete = Category::find($did);
        $categoryDelete->delete();
        return redirect('/category/show')->with('message','Category Deleted Successfully');
        
    }





}






















