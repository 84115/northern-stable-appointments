<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $fillable = [
        'appointment_host_id',
        'service_id',
        'name',
        'reference',
        'notes',
    ];

    public function host()
    {
        return $this->hasOne(AppointmentHost::class);
    }

    public function service()
    {
        return $this->hasOne(Service::class);
    }
}
