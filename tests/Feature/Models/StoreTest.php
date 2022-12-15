<?php

declare(strict_types=1);

namespace Tests\Feature\Models;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class StoreTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     */
    public function testGetStoreIndex(): void
    {
        $user = User::factory()->withPersonalTeam()->create();

        $response = $this->actingAs($user)->get(
            route('stores.index')
        );

        $response->assertStatus(200);
        $response->assertSee('Stores List');
        $response->assertViewIs('store.index');
        $response->assertViewHas('stores');
    }

    /**
     * A basic feature test example.
     */
    public function testGetStoreCreate(): void
    {
        $user = User::factory()->withPersonalTeam()->create();

        $response = $this->actingAs($user)->get(
            route('stores.create')
        );

        $response->assertStatus(200);
        $response->assertViewIs('store.create');
        $response->assertSee('Add a Store');
    }
}
