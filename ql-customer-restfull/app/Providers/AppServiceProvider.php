<?php

namespace App\Providers;

use app\Repositories\Eloquent\EloquentRepository;
use App\Repositories\Impl\CustomerRepository;
use CustomerInterface;
use CustomerSerice;
use CustomerServiceImpl;
use Illuminate\Config\Repository;
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
        $this->app->singleton(Repository::class, EloquentRepository::class);

        $this->app->singleton(CustomerServiceImpl::class, CustomerSerice::class);
        $this->app->singleton(CustomerInterface::class, CustomerRepository::class);
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
