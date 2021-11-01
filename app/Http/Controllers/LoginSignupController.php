<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Faker\Provider\Image;

class LoginSignupController extends Controller
{
    // Login
    public function Login(Request $request) {
        $email = $request->email;
        $pass = md5($request->password);
        $user = DB::table('user')->where([
                    ['Email', $email],
                    ['Password', $pass]
                ])->first();


        if (!empty($user)) {
            $request->session()->put('id', $user->ID);
            $request->session()->put('username', $user->FullName);
            $request->session()->put('email', $user->Email);
            $request->session()->put('gender', $user->Gender);
            $request->session()->put('phone', $user->PhoneNumber);
            $request->session()->put('image', $user->Image);
            $request->session()->put('sdate', $user->Created_At);
            $request->session()->put('password', $user->Password);
            $request->session()->put('avgrating', $user->AverageRating);
            
            $username = $request->session()->get('username');
            return view('index', compact('username'));
        }

    }

    // Register
    public function Register(Request $request) {
        $fullname = $request->Fullname;
        $pnum= $request->Pnum;
        $email = $request->Email;
        $pass = md5($request->Password);
        $dept = $request->Department;
        $rpass = md5($request->Rpassword);
        $gender = $request->Gender;
        //$image = $request->input('profile_image');

        $user = new User();
        $user->Email = $email;
        $user->Fullname = $fullname;
        $user->Gender = $gender;
        $user->PhoneNumber = $pnum;
        if($request->hasfile('profile_image'))
        {
            $file = $request->file('profile_image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('upload_images', $filename);
            //Save Data
            $user->Image = $filename;
        }

        $user->Password = $pass;
        $user->AverageRating = 0;
        $user->save();

        $request->session()->put('username', $user->Fullname);
        $request->session()->put('gender', $user->Gender);
        $request->session()->put('phone', $user->PhoneNumber);
        $request->session()->put('image', $user->Image);
        $request->session()->put('password', $user->Password);
        $request->session()->put('avgrating', $user->AverageRating);
        
        $username = $request->session()->get('username');
        return view('index', compact('username'));
    }

   

    // Logout
    public function Logout(Request $request) {
        $request->session()->flush();
        return view('index');
        
    }
}
