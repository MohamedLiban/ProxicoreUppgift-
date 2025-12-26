<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class Customer404Test extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_returns_404_for_missing_customer()
    {
        $response = $this->get('/customers/999999');

        $response->assertStatus(404);
    }
}