<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class AppointmentAllergy extends Pivot
{
    protected $table = 'appointments_allergies';
}
