<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Product;
use App\Category_Product;
use App\Category;

class ProductController extends Controller
{
    public function create()
   {
   	 //echo "Function created";
   	 return view('admin/product/create');
   }


   public function store(Request $input)
   {
   	$name=$input['name'];
   	$slug=$input['slug'];
   	$sku=$input['sku'];
   	$desc=$input['desc'];	
   	$price=$input['price'];
   	$disc=$input['discount'];
   	

   	 $product= ['name'=>$name,'slug'=>$slug,'sku'=>$sku,'description'=>$desc, 'price'=>$price,'discount'=>$disc];
    	
    	 $product= Product::create($product);
        
        echo 'Product added';

        return $product->name.$product->slug.$product->sku.$product->desc.$product->price.$product->disc;
   }

   public function show($id)
   {
     $prod=Product::find($id);
    //echo $prod->name;
    return view('/admin/product/show')->with(['prod'=>$prod]);
    //echo $prod;
   }

   public function display()
   {
     $prod=Product::get();
    //echo $prod->name;
    return view('/admin/product/show')->with(['prod'=>$prod]);
    //echo $prod;
   }
}
