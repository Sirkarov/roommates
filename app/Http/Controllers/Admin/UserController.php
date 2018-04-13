<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\User;
use DB;
use View;

class UserController extends Controller
{
    public function user()
    {
        $data['users'] = User::all();
        return View::make('admin.user.list', $data);
    }
}
