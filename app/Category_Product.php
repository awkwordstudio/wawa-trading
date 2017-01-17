<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category_Product extends Model
{
    protected $fillable= ['category_id','product_id'];

    public function products()
    {
    	return $this->hasMany('App\Product');
    }
    public function categories()
    {
    	return $this->hasMany('App\Category');
    }
}
