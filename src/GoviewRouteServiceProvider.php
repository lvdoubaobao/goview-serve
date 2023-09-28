<?php

namespace Xczn\GoViewServe;



use App\Providers\RouteServiceProvider;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;


class GoviewRouteServiceProvider extends RouteServiceProvider
{
    public function boot()
    {
        $this->routes(function () {
            Route::prefix('api/goview')
                ->middleware('api')
                ->namespace($this->namespace)
                ->group(__DIR__.'/../route/api.php');
        });
    }
}
