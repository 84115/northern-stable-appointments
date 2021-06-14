<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppointmentHost extends Model
{
    use HasFactory;

    protected $fillable = [
        'appointment_host_id',
        'user_id',
    ];
}
