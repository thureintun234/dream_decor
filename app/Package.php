<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $fillable = [
        'name', 'photo', 'price'
    ];

    public function items($value='')
    {
    	return $this->belongsToMany('App\Item','package_product')
    				->withPivot('item_typs')
    				->withTimestamps();

    }
}
