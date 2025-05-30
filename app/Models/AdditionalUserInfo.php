<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdditionalUserInfo extends Model
{
    protected $fillable = ['borndate', 'gender', 'address', 'phone_number', 'user_id'];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

    protected $table = 'additional_user_infos';
}
