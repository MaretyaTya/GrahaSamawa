<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Unit;
use App\Models\Brochure;


class LandingPageController extends Controller
{
    public function index()
    {
        //Take allunit properti from database
        $units = Unit::all();
        $brochure = Brochure::latest()->first();

        //Send data to view landing page
        return view('landing.index', compact('units', 'brochure'));
    }
}
