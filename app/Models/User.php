<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{

    public $table = "users";

    public function genderType()
    {
        return $this->belongsTo(GenderType::class,"gender_type_id");
    }

    public function advertisements()
    {
        return $this->hasMany(Advertisement::class,"user_id");
    }
    public function roleType()
    {
        return $this->belongsTo(Role::class,"role_id");
    }

}
