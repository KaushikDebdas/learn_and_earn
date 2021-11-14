<?php

namespace App\Http\Controllers;
use Hash;
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
    // Profile Update View Page
    public function ProfileUpdateView()
    {
        # code...
        $username = Session()->get('username');
        // $Pnum = $request->Pnum;
        // $image = $request->image;

        $user = DB::table('user')->where([
            ['UserName', $username]
        //     ['PhoneNumber', $Pnum],
        //     ['Image', $image]
           
        ])->first();
        return view('dashboardprofile.updateprofile',compact('user'));
        
        // $msg = "Update Successfull";
        // return view('dashboardprofile.updateprofile',compact('msg'));

    }
    // Profile Update fun
    public function Updateprofile(Request $request)
    {
        echo "hello";
        exit;
        // $var = DB::table('post')
        //     ->where('ID', $request->postid)->first();
        // return view('dashboardprofile.updateprofile');
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
    // Appoint
    public function Appoint(Request $request)
    {
        # code...
        $name = $request->name;
        $data = DB::table('user')->where('UserName','like','%'.$name.'%')->get();
        $postid = $request->post_id;
        return view('dashboardprofile.appoint',compact('data','postid'));
    }
    // Enroll Appoint
    public function EnrollAppoint(Request $request)
    {
        # code...
        $username = $request->username;
        // echo $username;
        // echo $request->postid;
       
        DB::table('post')
            ->where([
                ['ID', $request->postid]
            ])
            ->update(['TutorName' => $username]);
        
        $item = DB::table('groupstudy')->where([['UserID',Session()->get('id')]])->get();
        $item_post = DB::table('post')->where([['UserID',Session()->get('id')]])->get();
        $subjects = DB::table('course')->get();
        return view('dashboardprofile.requestedpost',compact('item','subjects','item_post'));
        
    }
    // As a Tutor
    public function AsTutor(Request $request)
    {
        # code...
        $item = DB::table('groupstudy')->where([['UserID',Session()->get('id')]])->get();
        $item_post = DB::table('post')->where([['UserID',Session()->get('id')]])->get();
        $subjects = DB::table('course')->get();
        return view('dashboardprofile.astutor',compact('item','item_post','subjects'));
    }
    
}
