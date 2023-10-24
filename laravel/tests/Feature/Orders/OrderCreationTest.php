<?php

namespace Tests\Feature\Orders;

use App\Models\Product;
use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Support\Facades\Event;
use Tests\TestCase;

class OrderCreationTest extends TestCase
{
    use WithoutMiddleware, DatabaseTransactions, DatabaseMigrations;

    private User $user;
    private Product $product;

    public function setUp(): void
    {
        parent::setUp();

        $this->user = User::factory()->create();
        $this->product = Product::factory()->create();
    }

    public function testCreateOrderSuccessful()
    {
        $response = $this->post(
            '/api/orders',
            ['user_id' => $this->user->id, 'product_id' => $this->product->id]
        );

        $response->assertSuccessful();
        $response->assertStatus(200);
        $response->assertJsonPath('order.user_id', $this->user->id);
        $response->assertJsonPath('order.product_id', $this->product->id);
    }


    // 404 response expected
    public function testCreateOrderProductNotFound()
    {
        $latestProduct = Product::orderBy('id', 'desc')->first();

        Event::fake();

        $response = $this->post('/api/orders',
            ['user_id' => $this->user->id, 'product_id' => $latestProduct->id + 1]
        );

        $response->assertStatus(404);
    }

}
