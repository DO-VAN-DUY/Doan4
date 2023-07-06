<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\DB;
use App\Models\sanpham;
use App\Models\loaisp;
use App\helper\Cart;
use App\helper\CartHelper;

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
        view()->composer('*',function($view){
            $view->with([
                'catery'=>loaisp::limit(10)->orderBy('Tenloai','ASC')->get(),
                'portfolio' => DB::select('SELECT DISTINCT Tensp FROM `sanpham` LIMIT 10'),
                'cart'=>new CartHelper(), 
            ]);
            
        });
        
    }
}
