<?php

namespace App\Http\Controllers\Admin;

use App\Models\AdvertisementType;
use App\Models\City;
use App\Models\User;
use App\Models\Advertisement;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use View;
use DB;
class AdvertisementController extends Controller
{
    public function list()
    {
        $advertisements = Advertisement::all();
        return view('admin.advertisements.list',compact("advertisements"));
    }
    public function create()
    {
        $advertisements = Advertisement::all();
        $users = User::all();
        $cities = City::all();
        $advertisement_types = AdvertisementType::all();
        return view('admin.advertisements.create',compact("advertisements","users",'advertisement_types','cities'));
    }
}
