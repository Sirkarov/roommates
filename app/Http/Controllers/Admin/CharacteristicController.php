<?php

namespace App\Http\Controllers\Admin;

use App\Models\Characteristic;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use View;

class CharacteristicController extends Controller
{
    public function index()
    {
        $characteristics = Characteristic::all();
        return view('admin/characteristics/list',compact('characteristics'));
    }
    public function create()
    {
        return view('admin/characteristics/create');
    }
}
