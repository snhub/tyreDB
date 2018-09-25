<?php

namespace TyreDB\Providers;

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
        // \Log::useFiles(env('tyreDB.log'), config('app.log_level', 'debug'));
        // $handlers = \Log::getMonolog()->getHandlers();
        // $handler = array_shift($handlers);
        // $handler->setBubble(false);
	    Schema::defaultStringLength(191);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
