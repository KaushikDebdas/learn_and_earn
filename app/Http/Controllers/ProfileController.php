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
    public function RequestedPost()
    {
        # code...
        $item = DB::table('groupstudy')->get();
        $item_post = DB::table('post')->get();
        $subjects = DB::table('course')->get();
        return view('dashboardprofile.requestedpost',compact('item','subjects','item_post'));
    }
}
