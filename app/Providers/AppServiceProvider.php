<?php

namespace App\Providers;
use Illuminate\Contracts\Foundation\Application;
use App\Services\Auth\JwtGuard;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\ProdutoFamarcia;


 

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
    public function boot(): void
    {
        
        
        Paginator::useBootstrap();

        view()->composer('*', function($view) {
            $view->with('user', auth()->user());
        });

    
        // view()->share('clientes', $clientes,'produtos', $produtos);
    }
    

    

    
}
