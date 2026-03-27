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
        if (env('DB_SSL_CA_CONTENT')) {
            $path = storage_path('ca.pem');

            if (!file_exists($path)) {
                file_put_contents($path, env('DB_SSL_CA_CONTENT'));
            }
        }
    }
   
}
