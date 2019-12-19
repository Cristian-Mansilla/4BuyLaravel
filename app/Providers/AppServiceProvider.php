<?php

namespace App\Providers;

use App\Categorias;
use App\Pais;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

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
        Schema::defaultStringLength(191);
        // Blade::component('layouts.components.carousel','carousel');
        // $categorias = Categorias::whereNull('subcategoria_id')->get();
        // view()->share('categorias', $categorias);
        // $paises = Pais::all();
        // view()->share('paises', $paises);

    }
}
