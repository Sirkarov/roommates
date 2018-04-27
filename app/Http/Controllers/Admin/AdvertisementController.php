<?php

namespace App\Http\Controllers\Admin;

use App\Models\AdvertisementType;
use App\Models\ApartmentType;
use App\Models\City;
use App\Models\Heating;
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
        $heating_types = Heating::all();
        $apartment_types = ApartmentType::all();
        return view('admin.advertisements.create',compact("advertisements","users",'advertisement_types','cities', 'heating_types','apartment_types'));
    }

    public function store(Request $request)
    {
        $advertisement  = new Advertisement;

        $advertisement->user_id = $request->get('user');
        $advertisement->adv_type_id = $request->get('adv-type');
        $advertisement->city_id = $request->get('city');
        $advertisement->heating_type_id= $request->get('heating');
        $advertisement->apartment_type_id = $request->get('apartment-type');
        $advertisement->coordinates = $request->get('coordinates');
        $advertisement->street = $request->get('street');
        $advertisement->roommates = $request->get('roommates');
        $advertisement->description = $request->get('description');
        $advertisement->size = $request->get('size');
        $advertisement->price = $request->get('price');

        $advertisement->save();

        return redirect('admin/advertisements')->with(['success'=>'succesfully added']);
    }
}
