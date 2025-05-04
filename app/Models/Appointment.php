<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $fillable = ['date', 'time', 'reason', 'observations', 'episode_id'];

    public function allergies(){
        return $this->belongsToMany(Allergy::class, 'appointments_allergies', 'appointment_id', 'allergy_id');
    }

    public function medicines(){
        return $this->belongsToMany(Medicine::class, 'appointments_medicines', 'appointment_id', 'medicine_id');
    }

    public function vaccines(){
        return $this->belongsToMany(Vaccine::class, 'appointments_vaccines', 'appointment_id', 'vaccine_id');
    }

    public function diseases(){
        return $this->belongsToMany(Disease::class, 'appointments_diseases', 'appointment_id', 'disease_id');
    }

    public function episode(){
        return $this->belongsTo(Episode::class, 'episode_id');
    }

    protected $table = 'appointments';
}
