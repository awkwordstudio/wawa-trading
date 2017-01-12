<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use Illuminate\Http\Request;

use App\Product;
use App\Shoe;
use App\Watch;
use App\Bag;
use App\Glass;

class PageController extends Controller
{
	public function home()
	{
		return view('home');
	}
	public function category()
	{
		return view('category');
	}
    public function bag()
    {
        $bag=Bag::all();
        return view('bag')->with(['bag'=>$bag]);
    	//return view('bag');
    }
    public function glasses()
    {
    	$glass=Glass::all();
        return view('glasses')->with(['glass'=>$glass]);
    }
    public function shirt()
    {
    	return view('shirt');
    }
     public function shoe()
    {
    	$shoe=Shoe::all();
        return view('shoe')->with(['shoe'=>$shoe]);
        /*$product=['name'=>'product1' ,'description'=>'My first product','price'=>300,'image'=>'/shoe1.jfif'];
    	$var= Product::create($product);

    	echo"record added";
    	return $var;
         return view('shoe');*/
    }
    public function watch()
    {
        $watch=Watch::all();
        return view('watch')->with(['watch'=>$watch]);
    }
     public function aboutus()
    {
    	return view('aboutus');
    }
    public function edit($id)
   {
    echo ' call to edit';
        $gl=Glass::find($id);
     
        //return $gl;

        //$glass=Glass::all();
        //return view('edit' ,compact($gl));
        return view('edit')->with(['glass' =>$gl]);
   }

   public function update(Request $req, $id)
   {    

        $glass= Glass::findorFail($id);
        $glass->name=$req['name'];
        $glass->description=$req['description'];
        $glass->price=$req['price'];
        $glass->image=$req['image'];
        $glass->save();
        return back();

   /*echo 'update';
        return $gl;
        */
       // $glass=Glass::find($id);
        //return $glass;
      //$gl =update($req->all());
       
   }
   public function app()
   {
       return view('app');
   }
}
