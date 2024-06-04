<?php

namespace Tests\Feature\User;

use Illuminate\Support\Facades\Artisan;
use Tests\TestCase;

class UserRegistrationTest extends TestCase
{
    public function setUp(): void
    {
        parent::setUp();
        Artisan::call('migrate');
    }

    function testUserRegistrationSuccessful()
    {
        $response = $this->post('/api/users', [
            'email' => 'test@test.com',
            'password' => '12346578',
            'name' => 'Mario',
        ]);

        $response->assertStatus(200);
        $this->assertEquals('test@test.com', $response->json('email'));
    }

    function testUserRegistrationFailed()
    {
        $response = $this->post('/api/users', [
            'email' => 'testtest.com',
            'password' => '12346578',
            'name' => 'Mario',
        ]);

        $response->assertStatus(422);
        $this->assertEquals(
            'The email field must be a valid email address.',
            $response->json('message')
        );
    }
}
