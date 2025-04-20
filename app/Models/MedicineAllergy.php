<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class MedicineAllergy extends Pivot
{
    protected $table = 'medicines_allergies';
}
