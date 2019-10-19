<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
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
}
