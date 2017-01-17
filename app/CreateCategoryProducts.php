<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CreateCategoryProducts extends Model
{
	protected $fillable=['category_id','product_id'];
    public function category()
    {
    	return $this->hasMany('App\Category');
    }
    public function product()
    {
    	return $this->hasMany('App\Product');
    }
}
