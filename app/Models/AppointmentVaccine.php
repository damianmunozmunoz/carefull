<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class AppointmentVaccine extends Pivot
{
    protected $table = 'appointments_vaccines';
}
