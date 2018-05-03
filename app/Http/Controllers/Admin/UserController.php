<?php

namespace App\Http\Controllers\Admin;

use App\DAL\User\UserRepository;
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
    private $userRepository;

    public function __construct(
        UserRepository $userRepository
    )
    {
        $this->userRepository = $userRepository;
    }

    public function list()
    {
        $users = $this->userRepository->all();
        return view('admin.users.list', compact("users"));
    }
    public function create()
    {
        $users = User::all();
        $genderTypes = GenderType::all();
        $roleTypes = Role::all();
        $cities = City::all();
        return view('admin.users.create',compact('users','genderTypes','cities','roleTypes'));
    }
    public  function store(Request $request)
    {

        $this->userRepository->create($request->all());
        //Create a new post using the request data , Save it to the database , And redirect somewhere in the application
//        $user = new User;
//        $user->name = $request->get('name');
//        $user->surname = $request->get('surname');
//        $user->gender_type_id = $request->get('gender');
//        $user->role_id = $request->get("role");
//        $user->email = $request->get('email');
//        $user->years = $request->get('years');
//        $user->city_id = $request->get('city');
//        $user->phone = $request->get('phone');
//        $user->description = $request->get('description');
//        $user->facebook = $request->get('facebook');
//        $user->twitter = $request->get('twitter');
//        $user->image = "default";
//        $user->password = "default";
//
//        #Save it to the database
//        $user->save();

        #And redirect somewhere in the application
        return redirect('admin/users')->with(['success'=>'succesfully added']);
    }

    public function testStore()
    {
        //Create a new test user with default values , Save it to the database , And redirect somewhere in the application
        $user = new User;
        $user->name = "Test User Name";
        $user->surname = "test User Surname";
        $user->gender_type_id = rand(1,2);
        $user->role_id = 3;
        $user->email = "Test@Useremail.com";

        $years = rand(18,30);
        $user->years = $years;
        $city =  rand(1,30);
        $user->city_id = $city;

        $phone = rand(111111,999999);
        $user->phone = "075".$phone;
        $user->description = "This is a description for Test User";
        $user->facebook = "Test User Facebook";
        $user->twitter = "Test User Twitter";
        $user->image = "default";
        $user->password = "default";

        #Save it to the database
        $user->save();

        #And redirect somewhere in the application
        return redirect('admin/users')->with(['success'=>'succesfully added']);
    }

    public function edit($id)
    {
        $user = User::findorFail($id);
        $genderTypes = GenderType::all();
        $roleTypes = Role::all();
        $cities = City::all();
        return view('admin.users.edit', compact('user','genderTypes','cities','roleTypes'));
    }

    public function update(Request $request,$id)
    {
        $user = User::findorFail($id);
        $user->name = $request->get('name');
        $user->surname = $request->get('surname');
        $user->gender_type_id = $request->get('gender');
        $user->role_id = $request->get('role');
        $user->email = $request->get('email');
        $user->years = $request->get('years');
        $user->city_id = $request->get('city');
        $user->phone = $request->get('phone');
        $user->description = $request->get('description');
        $user->facebook = $request->get('facebook');
        $user->twitter = $request->get('twitter');
        $user->image = "default";
        $user->password = "default";

        $user->save();

        return redirect('admin/users')->with(['success'=>'succesfully added']);
    }

    public function delete(Request $request){

        $user=User::find($request->get("id"));
        $user->delete();

        return response()->json(['status' => 'success']);
    }

}
