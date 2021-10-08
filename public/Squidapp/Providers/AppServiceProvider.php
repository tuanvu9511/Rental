<?php

namespace App\Providers;

use App\Services\Interfaces\SquadServiceInterface;
use App\Services\Interfaces\PositionServiceInterface;
use App\Services\Interfaces\EmployeeServiceInterface;
use App\Services\SquadService;
use App\Services\PositionService;
use App\Services\EmployeeService;
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
        // Dependency Injection
        $this->app->bind(SquadServiceInterface::class, SquadService::class);
        $this->app->bind(PositionServiceInterface::class, PositionService::class);
        $this->app->bind(EmployeeServiceInterface::class, EmployeeService::class);

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
