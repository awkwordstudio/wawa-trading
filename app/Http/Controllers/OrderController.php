<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Product;
use App\Category;
use App\Customer;
use App\Photo;
use App\Order;

class OrderController extends Controller
{
    public function store(Request $input)
   {
   	  $orders=Order::create($input->all());
	  return $orders;
   }
}



