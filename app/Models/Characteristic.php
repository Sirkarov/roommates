<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Characteristic extends Model
{
    public $table = 'characteristics';

    public function advertisements()
    {
        return $this->belongsToMany(Advertisement::class,"advertisement_characteristics","characteristic_id","advertisement_id")->withTimestamps();
    }
}
