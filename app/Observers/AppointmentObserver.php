<?php

namespace App\Observers;

use App\Mail\AppointmentCreated;
use App\Mail\AppointmentDeleted;
use App\Models\Appointment;
use App\Models\User;
use Illuminate\Support\Facades\Mail;

class AppointmentObserver
{
    /**
     * Handle the Appointment "created" event.
     *
     * @param  \App\Models\Appointment  $appointment
     * @return void
     */
    public function created(Appointment $appointment)
    {
        Mail::to(User::findOrFail($appointment->user_id))->send(new AppointmentCreated($appointment));
    }

    /**
     * Handle the Appointment "deleted" event.
     *
     * @param  \App\Models\Appointment  $appointment
     * @return void
     */
    public function deleted(Appointment $appointment)
    {
        Mail::to(User::findOrFail($appointment->user_id))->send(new AppointmentDeleted($appointment));
    }

    /**
     * Handle the Appointment "force deleted" event.
     *
     * @param  \App\Models\Appointment  $appointment
     * @return void
     */
    public function forceDeleted(Appointment $appointment)
    {
        Mail::to(User::findOrFail($appointment->user_id))->send(new AppointmentDeleted($appointment));
    }
}
