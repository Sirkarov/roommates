<?php

namespace App\Http\Controllers\Admin;

use App\Models\AdvertisementType;
use App\Models\ApartmentType;
use App\Models\Characteristic;
use App\Models\City;
use App\Models\Heating;
use App\Models\User;
use App\Models\Advertisement;
use App\Models\GenderType;
use App\Models\Role;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use View;
use DB;
use GenerateLocalized;
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
        $characteristics = Characteristic::all();
        return view('admin.advertisements.create',compact("advertisements","users",'advertisement_types','cities', 'heating_types','apartment_types','characteristics'));
    }

    public function store(Request $request)
    {
        $advertisement  = new Advertisement;

        $advertisement->user_id = $request->get('user');
        $advertisement->name = $request->get('name');
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
        $advertisement->active = false;

        $advertisement->save();

        return redirect('admin/advertisements')->with(['success'=>'succesfully added']);
    }
    public function testStore()
    {
        $advertisement = new Advertisement;

        $users = User::all('id');
        $RandomUserId =  array_random($users->pluck('id')->toArray());
        $advertisement->user_id = $RandomUserId;

        $advertisement->name = "TEST NAME ADVERTISEMENT";

        $adv_types = AdvertisementType::all('id');
        $RandomAdvType = array_random($adv_types->pluck('id')->toArray());
        $advertisement->adv_type_id = $RandomAdvType;

        $cities = City::all('id');
        $RandomCityId = array_random($cities->pluck('id')->toArray());
        $advertisement->city_id = $RandomCityId;

        $heatingTypes = Heating::all('id');
        $RandomHeatingType = array_random($heatingTypes->pluck('id')->toArray());
        $advertisement->heating_type_id= $RandomHeatingType;

        $ApartmentTypes = ApartmentType::all('id');
        $RandomApartmentId = array_random($ApartmentTypes->pluck('id')->toArray());
        $advertisement->apartment_type_id = $RandomApartmentId;

        $advertisement->coordinates = "1212,f1211312321";
        $advertisement->street = "TEST STREET";
        $advertisement->roommates = rand(1,5);
        $advertisement->description = "THIS IS A DESCRIPTION FOR";
        $advertisement->size = rand(45,65);
        $advertisement->price = rand(200,300);
        $advertisement->active = false;

        $advertisement->save();
        return redirect('admin/advertisements')->with(['success'=>'succesfully added']);
    }
    public function edit($id)
    {
        $advertisement = Advertisement::findorFail($id);
        $users = User::all();
        $genderTypes = GenderType::all();
        $roleTypes = Role::all();
        $cities = City::all();
        $advertisement_types = AdvertisementType::all();
        $heating_types = Heating::all();
        $apartment_types = ApartmentType::all();
        $characteristics = Characteristic::all();
        return view('admin.advertisements.edit', compact('advertisement','users','genderTypes','cities','roleTypes','advertisement_types','heating_types','apartment_types','characteristics'));
    }

    public function update(Request $request,$id)
    {
        $advertisement = Advertisement::findorFail($id);

        $advertisement->user_id = $request->get('user');
        $advertisement->name = $request->get('name');
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
        $advertisement->active = false;

        $advertisement->save();

        return redirect('admin/advertisements')->with(['success'=>'succesfully added']);
    }

    public function delete($id)
    {
        $advertisement=Advertisement::find($id);
        $advertisement->delete();

        return redirect(route('admin.advertisements.list'));
    }
}
