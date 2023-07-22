<?php

namespace App\Providers;

use App\Service\Dispatch\Client;
use Illuminate\Support\ServiceProvider;
use GuzzleHttp\Client as GuzzleClient;

class WebhookServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind(
            Client::class,

            function () {
                return new Client(
                    app(GuzzleClient::class),
                    config('services.webhook.url')
                );
            }
        );
    }
}
