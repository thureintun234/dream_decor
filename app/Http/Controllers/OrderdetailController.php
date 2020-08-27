<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\User;
use Auth;
use App\Orderdetail;


class OrderdetailController extends Controller
{
	public function orderdetail(Request $request)
    {
    	// dd($request);
        $cartArr = json_decode($request->shop_data); //array

        foreach ($cartArr as $row) {
            $orderdetail = new Orderdetail;
        	$orderdetail->order_id = $request->order_id;
      	  	$orderdetail->item_id = $request->item_id;
        	$orderdetail->package_id = $request->package_id;
        	$orderdetail->qty = $request->qty;
        	$orderdetail->save(); 
            
        }
          

    }
}
