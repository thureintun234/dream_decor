<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use App\Category;
use App\Subcategory;
use App\Package;

class FrontendController extends Controller
{

    public function index($value='')
    {
        $packages = Package::take(8)->get();
    	$categories = Category::take(8)->get();
    	$items = Item::OrderBy('id','desc')->take(6)->get();
    	return view('frontend.index',compact( 'packages', 'categories','items'));
    }
    public function checkout($value='')
    {
    	$categories = Category::all();
    	return view('frontend.checkout', compact('categories'));
    }
    public function profile($value='')
    {
        $categories = Category::take(8)->get();
   		return view('frontend.profile',compact('categories'));
    }
    public function item($value='')
    {
        $items = Item::all();
        $categories = Category::all();
        return view('frontend.item',compact('categories','items'));
    }

    public function package($value='')
    {
        $packages = Package::all();
        $categories = Category::all();
        return view('frontend.package',compact('categories','packages'));
    }

    public function packagedetail($id)
    {
        $items = Item::find($id);
        $packages = Package::find($id);
        $categories = Category::all();
         return view('frontend.packagedetail',compact('items', 'packages','categories'));
    }

    public function getItems(Request $request)
    {
        $sid = $request->sid;
        if ($sid == 0) {
            $items = Item::all();
        }else{
            $items = Subcategory::find($sid)->items;
        }
        
        return $items;
    }
}
