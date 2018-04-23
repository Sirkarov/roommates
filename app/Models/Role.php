<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public $table = "roles";

    public function roles()
    {
        return $this->hasMany(User::class,"role_id","id");
    }
}
