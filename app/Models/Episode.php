<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Episode extends Model
{
    protected $fillable = ['name', 'patient_id', 'nurse_id'];

    public function appointments(){
        return $this->hasMany(Appointment::class);
    }

    public function patients(){
        return $this->belongsTo(User::class, 'patient_id');
    }

    public function nurses(){
        return $this->belongsTo(User::class,'nurse_id');
    }

    protected $table = 'episodes';
}
