<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\Interfaces\productServiceInterface;
use App\Services\productService;
use App\Repositories\Interfaces\ProductRepositoryInterface;
use App\Repositories\productRepository;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     * 
     * @return void
     */
    public function register()
    {
        $this->app->bind(productServiceInterface::class,productService::class);
        $this->app->bind(productRepositoryInterface::class,productRepository::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
