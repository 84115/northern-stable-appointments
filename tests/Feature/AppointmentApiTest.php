<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AppointmentApiTest extends TestCase
{
    public function test_create_a_new_appointment(): void
    {
        $response = $this->postJson('/api/v1/appointment', [
            'appointment_host_id' => '1',
            'service_id' => '1',
            'name' => 'THIS IS A TEST',
            'reference' => 'HELLO WORLD',
            'notes' => 'lorem ipsum',
            'user_id' => '1',
        ]);

        $response->assertStatus(201);
    }
}
