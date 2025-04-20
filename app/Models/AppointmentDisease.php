<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class AppointmentDisease extends Pivot
{
    protected $table = 'appointments_diseases';
}
