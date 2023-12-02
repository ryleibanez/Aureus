<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

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
       
        //Address
        Validator::extend('unique_address', function ($attribute, $value, $parameters, $validator) {
            list($table, $column, $ignoreId) = $parameters;
            return DB::table('products')
                ->where($column, $value)
                ->where('id', '!=', $ignoreId)
                ->count() === 0;
        });
    }
}
