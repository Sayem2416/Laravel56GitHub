<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    // public function main()
    // {
    //     return view('frontEnd.home.homeContent');
    // }


    public function index()
    {
        return view('admin.home.home-content');
    }

    public function add()
    {
        return view('admin.dashboardCategory.category-add');
    }

    // public function show()
    // {
    //     return view('admin.dashboardCategory.category-show');
    // }


    public function entry(request $request){
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

            return redirect()->back()->with('message','Yes,Category Inserted Successfully from Admin Panel');


    }













    public function show(){
        // $categories = Category::all();
// pagination er jonno Uporer all() er poriborte paginate(5) Dite hobe
        $categories = Category::paginate(7);
        // dd($categories);

        return view('admin.dashboardCategory.category-show',['categories'=>$categories]);
    }









    public function edit($x){
        $categoryById = Category::where('id',$x)->first();

        return view('admin.dashboardCategory.category-edit',['categoryById'=>$categoryById]);
    }

    public function update(request $request){
        // dd($request->all());

        $category = Category::find($request->catId);

        $category->categoryName = $request->catName;
        $category->categoryDescription = $request->catDescription;
        $category->publicationStatus = $request->pstatus;

        $category->save();

        return redirect('/dashboard/show')->with('message','Category Updated Successfully from Admin Panel');

    }
    
    public function delete($did){
        $categoryDelete = Category::find($did);
        $categoryDelete->delete();
        return redirect('/dashboard/show')->with('message','Category Deleted Successfully from Admin Panel');
        
    }


}
