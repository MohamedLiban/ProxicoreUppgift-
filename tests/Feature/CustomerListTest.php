<?php

namespace Tests\Feature;

use App\Models\Customer;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CustomerListTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_shows_customer_list_page()
    {
        Customer::factory()->create(['name' => 'Testkund']);

        $response = $this->get('/customers');

        $response->assertStatus(200);
        $response->assertSee('Testkund');
    }
}