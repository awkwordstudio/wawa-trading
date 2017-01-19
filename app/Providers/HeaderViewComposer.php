<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Category;

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
            $view->with(['categories'=>$categories]);
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
