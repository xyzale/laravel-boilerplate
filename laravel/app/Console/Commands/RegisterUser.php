<?php

namespace App\Console\Commands;

use App\Service\Exceptions\DuplicateEmailException;
use App\Service\UserService;
use Illuminate\Console\Command;

class RegisterUser extends Command
{
    public function __construct(private UserService $service)
    {
        parent::__construct();
    }

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:register {email} {password} {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new user via CLI';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Creating user...');

        try {
            $user = $this->service->register(
                $this->argument('email'),
                $this->argument('password'),
                $this->argument('name')
            );
        } catch (DuplicateEmailException) {
            $this->error('email already exists');
            return;
        }

        $this->info(
            sprintf('User created with id %d!', $user->id)
        );
    }
}
