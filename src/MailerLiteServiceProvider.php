<?php

namespace RankFoundry\MailerLite;

use Illuminate\Support\ServiceProvider;
use MailerLiteApi\MailerLite;

class MailerLiteServiceProvider extends ServiceProvider
{
    protected $defer = true;

    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/mailerlite.php' => config_path('mailerlite.php'),
        ]);
    }
    
    public function register()
    {
        $this->registerMailerLite();
    }

    public function provides()
    {
        return ['mailerlite'];
    }

    protected function registerMailerLite()
    {
        $this->app->bind('mailerlite', function ($app) {
            return new MailerLite($app['config']['mailerlite.api_key']);
        });
    }
}