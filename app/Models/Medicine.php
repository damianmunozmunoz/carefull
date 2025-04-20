<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
    protected $fillable = ['name', 'description'];

    public function appointments(){
        return $this->belongsToMany(Appointment::class, 'appointments_medicines', 'medicine_id', 'appointment_id');
    }

    public function diseases(){
        return $this->belongsToMany(Disease::class, 'medicines_diseases', 'medicine_id', 'disease_id');
    }

    public function allergies(){
        return $this->belongsToMany(Allergy::class, 'medicines_allergies', 'medicine_id', 'allergy_id');
    }

    protected $table = 'medicines';
}
