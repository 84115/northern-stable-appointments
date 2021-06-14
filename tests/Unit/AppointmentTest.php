<?php

namespace Tests\Unit;

use App\Models\Appointment;
use Tests\TestCase;

class AppointmentTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_create_new_appointment()
    {
        $appointment = new Appointment;
        $appointment->appointment_host_id = 1;
        $appointment->service_id = 1;
        $appointment->name = 'THIS IS A TEST';
        $appointment->reference = 'HELLO WORLD';
        $appointment->notes = 'lorem ipsum';
        $appointment->save();

        $this->assertTrue($appointment->name === 'THIS IS A TEST');
    }
}
