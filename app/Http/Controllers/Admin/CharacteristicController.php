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
    public function store(Request $request)
    {
        #Create new Characteristic
        $characteristic = new Characteristic;
        $characteristic->characteristic = $request->get('name_characteristic');
        #Save it to the database
        $characteristic->save();
        #And redirect somewhere in the application
        return redirect('admin/characteristics')->with(['success'=>'succesfully added']);
    }
    public function destroy($id){
        $characteristic=Characteristic::findOrFail($id);
        $characteristic->delete();
        return redirect(route('admin.characteristics.list'));
    }
}
