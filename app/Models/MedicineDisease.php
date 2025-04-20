<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class MedicineDisease extends Pivot
{
    protected $table = 'medicines_diseases';
}
