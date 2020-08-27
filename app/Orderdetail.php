<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orderdetail extends Model
{
	protected $table = 'order_detail';
     protected $fillable = [
        'order_id', 'item_id', 'package_id', 'qty'
    ];
}
