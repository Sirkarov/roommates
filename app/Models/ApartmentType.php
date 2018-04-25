<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ApartmentType extends Model
{
    public $table = "apartment_types";

    public function advertisements()
    {
        return $this->hasMany(Advertisement::class,'apartment_type_id','id');
    }
}
