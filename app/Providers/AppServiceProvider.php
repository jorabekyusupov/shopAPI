<?php

namespace App\Providers;

use App\Mixins\ResponseMixin;

use Illuminate\Routing\ResponseFactory as RoutingResponseFactory;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;

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
        Str::macro('getPhone', function ($phone) {
            return substr($phone, 0, 4).'-'.substr($phone, 4, 2).'-'.substr($phone, 6, 3).'-'.substr($phone, -4, 2).'-'.substr($phone, -2, 2);
        });
        RoutingResponseFactory::mixin(new ResponseMixin);
    }
}
