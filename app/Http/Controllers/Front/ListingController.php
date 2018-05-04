<?php

namespace App\Http\Controllers\Front;

use App\Models\Advertisement;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ListingController extends Controller
{
    public function listings()
    {
        $advertisements = Advertisement::all();
        return view('front/listing',compact('advertisements'));
    }
}
