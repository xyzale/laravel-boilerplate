<?php

namespace App\Console\Commands;

use App\Service\Dispatch\DispatcherService;
use App\Service\Dispatch\Exceptions\NotificationFailedException;
use Illuminate\Console\Command;

class DispatchOrders extends Command
{
    public function __construct(private readonly DispatcherService $service)
    {
        parent::__construct();
    }

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'orders:dispatch';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Dispatch paid orders';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $this->info("Process started");

        try {
            $this->service->dispatchOrders();
        } catch (NotificationFailedException) {
            $this->error("Failed to notify external service");
        }

        $this->info("Process completed");
    }
}
