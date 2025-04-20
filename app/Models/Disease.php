<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Disease extends Model
{
    protected $fillable = ['name', 'description'];

    public function appointments(){
        return $this->belongsToMany(Appointment::class, 'appointments_diseases', 'disease_id', 'appointment_id');
    }

    public function vaccines(){
        return $this->belongsToMany(Vaccine::class, 'diseases_vaccines', 'disease_id', 'vaccine_id');
    }

    public function medicines(){
        return $this->belongsToMany(Medicine::class, 'medicines_diseases', 'disease_id', 'medicine_id');
    }

    protected $table = 'diseases';
}
