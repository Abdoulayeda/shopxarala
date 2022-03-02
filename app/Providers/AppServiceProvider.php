<?php

namespace App\Providers;

use Cart;
use App\Models\Produit;
use App\Models\Categorie;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
         View::composer(['*'],function($view){
            $view->with([
                'nombredeproduit' => Cart::getTotalQuantity(),
                'totalpanier' => Cart::getTotal(),
                'carts' => Cart::getContent(),
                'total' =>Cart::getTotal(),
                'categories' =>  Categorie::all(),
                'produits'=> Produit::all()
            ]);
        }); 
    }
}
