<?php

namespace App\Service\Dispatch;
use App\Repository\OrderRepository;
use App\Service\Dispatch\Exceptions\NotificationFailedException;
use GuzzleHttp\Exception\GuzzleException;
use Psr\Log\LoggerInterface;

class DispatcherService
{
    public function __construct(
        private readonly OrderRepository $orderRepository,
        private readonly Client $client,
        private readonly LoggerInterface $logger
    ) {
    }

    /**
     * @throws NotificationFailedException
     */
    public function dispatchOrders(): void
    {
        $ordersToDispatch = $this->orderRepository->getOrdersToDispatch();

        foreach ($ordersToDispatch as $order) {
            try {
                $this->client->notifyExternalService($order->id);
            } catch (GuzzleException $e) {
                $this->logger->error("Failed to notify 3rd party service. Error: ". $e->getMessage());
                throw new NotificationFailedException();
            }

            $this->orderRepository->markDispatched($order);
        }
    }
}
