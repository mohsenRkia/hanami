<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Intervention\Image\Image;
use Plank\Mediable\Facades\ImageManipulator;
use Plank\Mediable\ImageManipulation;

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
        ImageManipulator::defineVariant('thumb',
            ImageManipulation::make(function (Image $image) {
                $image->fit(80, 80);
            })
        );
        ImageManipulator::defineVariant('normal',
            ImageManipulation::make(function (Image $image) {
                $image->fit(400, 400);
            })
        );
    }
}
