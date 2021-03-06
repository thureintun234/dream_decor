<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name', 'photo'
    ];

    public function items($value='')
    {
    	return $this->hasMany('App\Item');
    }

    public function subcategories($value='')
    {
    	return $this->hasMany('App\Subcategory');
    }
}
