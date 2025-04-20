<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Allergy extends Model
{
    protected $fillable = ['name', 'description'];

    public function appointments(){
        return $this->belongsToMany(Appointment::class, 'appointments_allergies', 'allergy_id', 'appointment_id');
    }

    public function medicines(){
        return $this->belongsToMany(Medicine::class, 'medicines_allergies', 'allergy_id', 'medicine_id');
    }

    protected $table = 'allergies';
}
