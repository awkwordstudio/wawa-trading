<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Category;
use App\Product;

class CategoryController extends Controller
{
     public function cat()
    {
    	return view('category');
    }

    public function create()
    {
    	return view('admin/category/create');
    }

    public function store(Request $input)
   {
   	$name=$input['name'];
   	$slug=$input['slug'];
   	$description=$input['description'];
	$category=['name'=>$name,'slug'=>$slug,'description'=>$description];
	$var=Category::create($category);
	  return $var->name." ".$var->slug." ".$var->description;
   }

   public function index()
   {
      $res=Category::All();
     return view('/admin/product/index')->with(['res'=>$res]);
   }

}
