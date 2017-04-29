<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
         // mendaftarkan contact 
        $this->app->when('App\Http\Controllers\UsersController')
            ->needs('App\Domain\Contracts\UsersInterface')
            ->give('App\Domain\Repositories\UsersRepository');
        $this->app->when('App\Http\Controllers\EmployeesController')
            ->needs('App\Domain\Contracts\EmployeesInterface')
            ->give('App\Domain\Repositories\EmployeesRepository');
        $this->app->when('App\Http\Controllers\DriversController')
            ->needs('App\Domain\Contracts\DriversInterface')
            ->give('App\Domain\Repositories\DriversRepository');
        $this->app->when('App\Http\Controllers\CarsController')
            ->needs('App\Domain\Contracts\CarsInterface')
            ->give('App\Domain\Repositories\CarsRepository');
        $this->app->when('App\Http\Controllers\TransactionsController')
            ->needs('App\Domain\Contracts\TransactionsInterface')
            ->give('App\Domain\Repositories\TransactionsRepository');
    }
}
