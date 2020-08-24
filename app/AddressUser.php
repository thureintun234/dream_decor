<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AddressUser extends Model
{
      protected $fillable = [
        'fullname', 'state', 'township', 'city', 'payment_type', 'user_id', 'pincode'
    ];

    public function user($value='')
    {
    	return $this->hasMany('App\User');
}
