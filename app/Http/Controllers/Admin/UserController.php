<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class UserController extends Controller
{
    public function index()
    {
       $data = DB::table('users')->get();

        var_dump($data);

        return view('admin/user/list');
    }
}