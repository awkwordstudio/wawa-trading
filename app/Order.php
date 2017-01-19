<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable= ['product_id','customer_id','amount'];


    public function products()
    {
    	return $this->hasMany('App\Product');
    }

    public function customers()
    {
    	return $this->hasone('App\Customer');
    }
}