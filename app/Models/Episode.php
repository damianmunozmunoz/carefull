<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Episode extends Model
{
    protected $fillable = ['name', 'pacient_id', 'nurse_id'];

    public function appointments(){
        return $this->hasMany(Appointment::class);
    }

    public function pacient(){
        return $this->belongsTo(User::class, 'pacient_id');
    }

    public function nurse(){
        return $this->belongsTo(User::class,'nurse_id');
    }

    protected $table = 'episodes';
}
