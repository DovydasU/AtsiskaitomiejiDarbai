<?php

namespace App\Http\Controllers;

use App\Models\Trip;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $trip_list = Trip::paginate(3);
        return view('index', compact("trip_list"));
    }
}
