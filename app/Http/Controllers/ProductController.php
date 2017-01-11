<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Product;

class ProductController extends Controller
{
   public function create()
   {
   	echo'hello';
   	return view('product.create');
   }
   public function store(Request $input)
   {
   	$name=$input['name'];
   	$desc=$input['desc'];
   	$price=$input['price'];
   	echo $name." ".$desc." ".$price;

   	/*/*$name=$_POST['name'];
   	$desc=$_POST['desc'];
   	$price=$_POST['price'];
   	echo $name." ".$desc." ".$price;
	echo'submitted';*/

	$product=['name'=>$name,'description'=>$desc,'price'=>$price];
	$var=Product::create($product);
	echo "$var";
   }

   public function show($id)
   {
   	$prod=Product::find($id);
   	//echo $prod->name;
   	return $prod->id;
   }

   public function index()
   {
	$res=Product::All();
	//echo $res;
	return view('product.index')->with(['res'=>$res]);
   }


}
