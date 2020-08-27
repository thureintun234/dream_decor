<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    protected $table = 'wishlist';
    protected $fillable = [
        'user_id', 'item_id'
    ];

    public function user($value='')
    {
    	return $this->hasMany('App\User');
    }

    public function item($value='')
    {
    	return $this->hasMany('App\Item');
    }
}
