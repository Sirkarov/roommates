<?php

namespace App\Http\Controllers\Admin;

use App\Models\City;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CityController extends Controller
{
    public function list()
    {
        $cities = City::all();
        return view('admin.cities.list',compact('cities'));
    }
    public function create()
    {
        return view('admin.cities.create');
    }
    public function store(Request $request)
    {
        #Create new Characteristic
        $city = new City;
        $city->name = $request->get('city');
        #Save it to the database
        $city->save();
        #And redirect somewhere in the application
        return redirect('admin/cities')->with(['success'=>'succesfully added']);
    }
    public function destroy($id)
    {
        $city=City::findOrFail($id);
        $city->delete();

        return redirect(route('admin.cities'));
    }
    public function edit($id)
    {
        $city = City::findOrFail($id);

        return view('admin.cities.edit', compact('city'));
    }
    public function update(Request $request,$id)
    {
        $city = City::findorFail($id);
        $city->name = $request->get('city');
        $city->save();

        return redirect('admin/cities')->with(['success'=>'succesfully added']);
    }
}
