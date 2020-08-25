<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    protected $fillable = [
        'name', 'photo'
    ];

    public function items($value='')
    {
    	return $this->belongsToMany('App\Item','color_product')
    				->withTimestamps();

    }

    public function item($value='')
    {
    	return $this->hasMany('App\Item');
    }
}
