<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Categorie;
use App\Models\Product;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        view()->composer('*', function ($view) {
            $view->with([
                'categories' => Categorie::take(6)->get(),
                'produits' => Product::where('statut',1)->take(12)->get()
            ]);
        });
    }
}
