<?php

namespace Bitfumes\contact;

use Illuminate\Support\ServiceProvider;

// extend this class to serviesProvider

class ContactServiceProvider extends ServiceProvider
{
    // the function boot and register are required

    public function boot()
    {
        // load route
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');

        // load the view , the second arrg is a package name
        $this->loadViewsFrom(__DIR__ . '/views', 'contact');

        // load database
        $this->loadMigrationsFrom(__DIR__ . '/database/migrations');

        // load Config to make the email general email
        $this->mergeConfigFrom(__DIR__ . '/config/contact.php', 'contact');

        // puplish the config
        $this->publishes([
            // publish the email so the user can change it
            __DIR__ . '/config/contact.php' => config_path('contact.php'),

            // publish the view contact page so the user acan change it
            __DIR__ . '/views' => resource_path('views/vendor/contact')
        ]);

        // to publish we have to run php artisan vendor publish to see what we can publish
    }

    public function register()
    {
    }
}
