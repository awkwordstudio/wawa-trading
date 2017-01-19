<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Http\Requests;
use App\Product;
use App\Category_Product;
use App\Category;
use App\Photo;

class HeaderViewComposer extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        View()->composer('partial.header' ,function($view)
        {
            $categories=Category::get();
            $products=Product::get();
            $view->with(['categories'=>$categories,'products'=>$products]);
        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
