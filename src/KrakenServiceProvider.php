<?php

namespace Santigarcor\Kraken;

use Kraken;
use Illuminate\Support\ServiceProvider;

class KrakenServiceProvider extends ServiceProvider
{

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Set up the publishing of configuration
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/kraken.php' => config_path('kraken.php')
        ]);
    }

    /**
     * Register the Kraken instance with the api authentication information.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('Kraken', function ($app) {
            return new Kraken($app['config']['kraken']['api_key'], $app['config']['kraken']['api_secret']);
        });
    }
}
