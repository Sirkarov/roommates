<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AddListingController extends Controller
{
    public function addListing()
    {
        return view('front/add-listing');
    }

}
