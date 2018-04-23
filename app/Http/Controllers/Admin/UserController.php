<?php

namespace App\Http\Controllers\Admin;

use App\Models\GenderType;
use App\Models\Role;
use App\Models\City;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use GenerateLocalized;
use App\Models\User;
use DB;
use Symfony\Component\Debug\Tests\Fixtures\FinalClass;
use View;


class UserController extends Controller
{
    public function list()
    {
        $users= User::all();
        return view('admin.users.list', compact("users"));
    }
    public function create()
    {
        $users = User::all();
        $genderTypes = GenderType::all();
        $roles = Role::all();
        $cities = City::all();
        return view('admin.users.create',compact('users','genderTypes','cities','roles'));
    }
    public  function store(Request $request)
    {
        //Create a new post using the request data , Save it to the database , And redirect somewhere in the application
        $user = new User;
        $user->name = $request->get('name');
        $user->surname = $request->get('surname');
        $user->gender_type_id = $request->get('gender');
        $user->role = $request->get("role");
        $user->email = $request->get('email');
        $user->years = $request->get('years');
        $user->city = $request->get('city');
        $user->phone = $request->get('phone');
        $user->description = $request->get('description');
        $user->facebook = $request->get('facebook');
        $user->twitter = $request->get('twitter');
        $user->image = "default";
        $user->password = "default";
        
        #Save it to the database
        $user->save();

        #And redirect somewhere in the application
        return redirect('admin/users')->with(['success'=>'succesfully added']);
    }

    public function delete(Request $request){

        $user=User::find($request->get("id"));
        $user->delete();

        return response()->json(['status' => 'success']);
    }

}
