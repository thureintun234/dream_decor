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

    public function packages($value='')
    {
        return $this->belongsToMany('App\Package','package_product')
                    ->withPivot('item_typs')
                    ->withTimestamps();
    }

    public function colors($value='')
    {
        return $this->belongsToMany('App\Color','color_product')
                    ->withPivot('color_type')
                    ->withTimestamps();
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
