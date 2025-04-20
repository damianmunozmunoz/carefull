<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class AppointmentMedicine extends Pivot
{
    protected $table = 'appointments_medicines';
}
