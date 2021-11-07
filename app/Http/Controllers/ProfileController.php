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
    // Profile Update
    public function ProfileUpdate()
    {
        # code...
        $username = Session()->get('username');
        
        $user = DB::table('user')->where([
            ['FullName', $username]
           
        ])->first();
        return view('dashboardprofile.updateprofile',compact('user'));
    }
    // Requested Post
    public function RequestedPost()
    {
        # code...
        $item = DB::table('groupstudy')->where([['UserID',Session()->get('id')]])->get();
        $item_post = DB::table('post')->where([['UserID',Session()->get('id')]])->get();
        $subjects = DB::table('course')->get();
        return view('dashboardprofile.requestedpost',compact('item','subjects','item_post'));
    }
    // As a Tutor
    public function AsTutor()
    {
        # code...
        $item = DB::table('groupstudy')->where([['UserID',Session()->get('id')]])->get();
        $item_post = DB::table('post')->where([['UserID',Session()->get('id')]])->get();
        $subjects = DB::table('course')->get();
        return view('dashboardprofile.astutor',compact('item','subjects','item_post'));
    }
}
