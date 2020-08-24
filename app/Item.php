<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = [
        'codeno', 'name', 'price', 'discount', 'photo1','photo2', 'description','category_id', 'brand_id', 'subcategory_id','color_id'
    ];

     public function brand($value='')
    {
    	return $this->belongsTo('App\Brand');
    }

    public function subcategory($value='')
    {
    	return $this->belongsTo('App\Subcategory');
    }

    public function color($value='')
    {
    	return $this->belongsTo('App\Color');
    }

    public function category($value='')
    {
    	return $this->belongsTo('App\Category');
    }

    public function wishlists($value='')
    {
        return $this->belongsTo('App\Wishlist');
    }
}
