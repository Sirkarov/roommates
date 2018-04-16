<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CharacteristicController extends Controller
{
    public function index()
    {
        return view('admin/characteristics/list');
    }
}
