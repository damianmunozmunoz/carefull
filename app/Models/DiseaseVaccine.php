<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class DiseaseVaccine extends Pivot
{
    protected $table = 'diseases_vaccines';
}
