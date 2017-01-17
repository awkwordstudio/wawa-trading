<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
  protected $fillable= ['product_id','url'];

  public function products()
  {
  	return $this->belongsTo('App\Product');
  }
}
