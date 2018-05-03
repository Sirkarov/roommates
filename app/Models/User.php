<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{

    public $table = "users";

    public $fillable = [
        'gender_type_id',
        'role_id',
        'city_id',
        'name',
        'surname',
        'email',
        'years',
        'phone',
        'description',
        'facebook',
        'twitter',
        'password',
        'image',
    ];

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

    public function city()
    {
        return $this->belongsTo(City::class,"city_id");
    }
}
