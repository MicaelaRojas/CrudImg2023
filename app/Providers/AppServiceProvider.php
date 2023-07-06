<?php

namespace App\Providers;

use Illuminate\Database\Schema\SchemaState;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Cloudinary\Cloudinary;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */


    public function register()
    {
        $this->app->singleton(Cloudinary::class, function ($app) {
            return Cloudinary::config([
                "cloud_name" => env('CLOUDINARY_CLOUD_NAME'),
                "api_key" => env('CLOUDINARY_API_KEY'),
                "api_secret" => env('CLOUDINARY_API_SECRET'),
            ]);
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
    }
}
