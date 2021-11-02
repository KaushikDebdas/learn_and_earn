<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Contracts\Session\Session;

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
        $username = Session()->get('username');

        $user = DB::table('user')->where([
            ['FullName', $username]
        ])->first();
        return view('dashboardprofile.updateprofile',compact('user'));
    }
}
