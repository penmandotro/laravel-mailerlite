<?php

namespace Penmandotro\MailerLite;

use Illuminate\Support\ServiceProvider;
use MailerLiteApi\MailerLite;

class MailerLiteServiceProvider extends ServiceProvider
{
    protected $defer = true;

    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config' => config_path(),
        ], 'config');
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
            return new MailerLite(config('mailerlite.api_key'));
        });
    }
}
