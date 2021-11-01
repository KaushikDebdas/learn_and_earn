<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    // Profile
    public function Profile()
    {
        # code...
        return view('dashboardprofile.personalinformation');
    }
    public function ProfileUpdate()
    {
        # code...
        return view('dashboardprofile.updateprofile');
    }
}
