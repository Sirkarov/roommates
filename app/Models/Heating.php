<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Heating extends Model
{
    protected $table = 'heating_types';

    public function advertisements()
    {
        return $this->hasMany(Advertisement::class,"heating_type_id","id");
    }
}
