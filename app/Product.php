<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable= ['name','slug','sku','description','price','discount'];

    //dynamic properties form laravel


     public function categories()
     {
     	return $this->belongsToMany('App\Category');
     }

     public function photos()
     {
     	return $this->hasMany('App\Photo');
     }
}
