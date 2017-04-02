<?php

namespace NotificationChannels\IftttMakerWebhooks;

use Illuminate\Support\ServiceProvider;

class IftttMakerWebhooksServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        $this->app->when(IftttMakerWebhooksChannel::class)->needs(IftttMakerWebhooksClient::class)->give(function () {
            return new IftttMakerWebhooksClient();
        });
    }

    /**
     * Register the application services.
     */
    public function register()
    {
    }
}
