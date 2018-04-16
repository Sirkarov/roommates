<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Advertisement;
use View;
use DB;
class AdvertisementController extends Controller
{
    public function list()
    {
        $advertisements = Advertisement::all();
        return view('admin.advertisements.list',compact("advertisements"));
    }
}
