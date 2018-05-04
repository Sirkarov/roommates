<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Advertisement extends Model
{
    public $table = "advertisements";

    public function advertisementType()
    {
        return $this->belongsTo(AdvertisementType::class,"adv_type_id","id");
    }
    public function heatingType()
    {
        return $this->belongsTo(Heating::class,"heating_type_id","id");
    }

    public function user()
    {
        return $this->belongsTo(User::class,"user_id","id");
    }
    public function city()
    {
        return $this->belongsTo(City::class,"city_id","id");
    }
    public function apartmentType()
    {
        return $this->belongsTo(ApartmentType::class,"apartment_type_id","id");
    }
    public function characteristics()
    {
        return $this->belongsToMany(Characteristic::class,"advertisement_characteristics","advertisement_id","characteristic_id")->withTimestamps();
    }
}
