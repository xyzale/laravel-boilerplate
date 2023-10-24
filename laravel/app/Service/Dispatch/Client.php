<?php

namespace App\Service\Dispatch;

use GuzzleHttp\Client as GuzzleClient;
use GuzzleHttp\Exception\GuzzleException;

class Client
{
    public function __construct(
        private readonly GuzzleClient $httpClient,
        private readonly string $webhookURL
    ) {
    }

    /**
     * @throws GuzzleException
     */
    public function notifyExternalService(int $orderId): void
    {
        $this->httpClient->post(
            $this->webhookURL,
            ['body' => json_encode(['order_id' => $orderId])]
        );
    }
}


