<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
        protected $fillable= ['title','rating','description','product_id','customer_id'];

        public function products()
    {
    	return $this->hasMany('App\Product');
    }

    public function customers()
    {
    	return $this->hasMany('App\Customer');
    }

}
