<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vaccine extends Model
{
    protected $fillable = ['name', 'description'];

    public function appointments(){
        return $this->belongsToMany(Appointment::class, 'appointments_vaccines', 'vaccine_id', 'appointment_id');
    }

    public function diseases(){
        return $this->belongsToMany(Disease::class, 'diseases_vaccines', 'vaccine_id', 'disease_id');
    }
}
