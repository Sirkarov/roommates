<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdvertisementType extends Model
{
    public $table = "advertisement_types";

    public function advertisements()
    {
        return $this->hasMany(Advertisement::class,"adv_type_id","id");
    }


}
