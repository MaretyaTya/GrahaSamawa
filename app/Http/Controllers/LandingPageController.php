<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Unit;


class LandingPageController extends Controller
{
    public function index()
    {
        //Take allunit properti from database
        $units = Unit::all();

        //Send data to view landing page
        return view('landing.index', compact('units'));
    }
}
