<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
        return view('admin.users.create');
    }
    public  function store(Request $request)
    {
        //Create a new post using the request data , Save it to the database , And redirect somewhere in the application
        $user = new User;
        $user->name = $request->get('name');
        $user->surname = $request->get('surname');
        $user->email = $request->get('email');
        $user->years = $request->get('years');
        $user->city = $request->get('city');
        $user->phone = $request->get('phone');
        $user->description = $request->get('description');

        #Save it to the database
        $user->save();

        #And redirect somewhere in the application
        return redirect('admin/users')->with(['success'=>'succesfully added']);
    }

}
