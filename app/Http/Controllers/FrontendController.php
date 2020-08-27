<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use App\Category;
use App\Subcategory;
use App\Package;
use Illuminate\Support\Facades\Auth;
use App\Brand;

use App\Wishlist;
use Illuminate\Support\Facades\DB;


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

    public function getpackages(Request $request)
    {
        $pid = $request->pid;
        if ($pid==0) {
            $packages = Package::all();
        }

        return $packages;
    }

    public function itemdetail($id,$value='')
    {
        $categories = Category::all();
        $items = Item::find($id);
        return view('frontend.itemdetail', compact('categories', 'items'));
    }

    public function sale($id,$value='')
    {

        // $items = Item::find($id);
        $categories = Category::all();
        $items = Item::where('discount','>', 0)->get();
        // dd($items);
        
        return view('frontend.sale',compact('items','categories'));
    }
    public function branditem($value='')
    {
        $brands = Brand::all();
        $categories = Category::all();
        return view('frontend.brand',compact('brands','categories'));
    }

    public function contact($value='')
    {
        return view('frontend.contact');
    }

    public function about($value='')
    {
        return view('frontend.about');
    }


    public function search(Request $request)
    {
        // dd($request);
        $search = $request->site_search;
        $categories = Category::all();

        if ($search == '') {
            return view('frontend.item',compact('categories'));
        }else{
            $items = DB::table('items')->where('name','LIKE','%'.$search.'%')->paginate(2);
            // dd($items);
            return view('frontend.item', ['msg'=>'Results:'.$search ],compact('items','categories'));

        }
    }


    // public function removeWishList($id)
    // {
    //     DB::table('wishlist')->where('item_id', '=', $id)->delete();

    //     return back()->with('msg', 'Item Removed from Wishlist');
    // }

    public function View_wishList($value='')
    {
        $categories = Category::all();
        $Items = DB::table('wishlist')->leftJoin('items','wishlist.item_id','=','items.id')->get();
        return view('frontend.wishlist',compact('Items','categories'));
    }

    public function addWishList(Request $request,$id)
    {
        // dd($request);
        // $items = Item::find($id);
        // dd($items);
        $categories = Category::all();
        $wishlist = new Wishlist();
        $wishlist->user_id = Auth::user()->id;
        $wishlist->item_id=$request->item_id;

        // dd($wishlist);

        $wishlist->save();
        $Items = DB::table('wishlist')->leftJoin('items','wishlist.item_id','=','items.id')->get();

        // $items = DB::table('items')->where('id', $request->item_id)->get();

        return view('frontend.wishlist',compact('Items','categories'));
    }

}
