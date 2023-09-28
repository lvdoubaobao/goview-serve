<?php

namespace Xczn\GoViewServe;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
class GoviewServiceProvider extends ServiceProvider
{
    public function boot()
    {

    }
    public function register()
    {
        $this->app->register(GoviewRouteServiceProvider::class);
    }


}
