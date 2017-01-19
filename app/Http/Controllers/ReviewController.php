<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Review;
use App\Product;
use App\Customer;

class ReviewController extends Controller
{
    public function store(Request $input)
   {
   	  $review=Review::create($input->all());
	  return $review->title." ".$review->rating." ".$review->description;
   }
}
