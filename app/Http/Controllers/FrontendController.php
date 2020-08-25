<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use App\Category;
use App\Subcategory;

class FrontendController extends Controller
{
    public function index($value='')
    {
    	$categories = Category::take(8)->get();
    	$items = Item::OrderBy('id','desc')->take(6)->get();
    	return view('frontend.index',compact('categories','items'));
    }
    public function checkout($value='')
    {
    	$categories = Category::all();
    	return view('frontend.checkout', compact('categories'));
    }
    public function profile($value='')
    {
   		return view('frontend.profile');
    }
}
