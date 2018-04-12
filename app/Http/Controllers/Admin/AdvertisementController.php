<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdvertisementController extends Controller
{
    public function advert()
    {
        return view('admin.advertisement.list');
    }
}
