<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function landingpage()
    {
        return view('frontend.landingpage.index');
    }
}
