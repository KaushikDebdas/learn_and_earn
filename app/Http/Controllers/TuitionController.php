<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
use App\Models\Course;

class TuitionController extends Controller
{
    // Create
    public function CreateTuition()
    {
        # code...
        return view('tuition.createtuition');
    }
    // Insert
    public function InsertTuition(Request $request)
    {
        # code...
        $courseID = $request->input('courseID');
        $description = $request->input('details');
        $stime = $request->input('stime');
        $etime = $request->input('etime');
        $payment = $request->input('payment');
        $gender = $request->input('gender');
        $data = array(
            "UserID" => Session()->get('id'),
            "CourseID" => $courseID,
            "PostDescription" => $description,
            "SelectedStartTime" => $stime,
            "SelectedEndTime" => $etime,
            "Payment" => $payment,
            "Gender" => $gender
        );

        DB::table('post')->insert($data);
        $item = DB::table('post')->orderBy('PostDateTime', 'desc')->get();
        $subjects = DB::table('course')->get();
        return view('tuition.viewtuition', compact('item', 'subjects'));
    }
    // View
    public function ViewTuition()
    {
        # code...
        $item = DB::table('post')->orderBy('PostDateTime', 'desc')->get();
        $subjects = DB::table('course')->get();
        return view('tuition.viewtuition', compact('item', 'subjects'));
    }
    // Enroll Post
    public function EnrollTuition(Request $request)
    {
        # code...
        $var = DB::table('post')
            ->where('ID', $request->postid)->first();
        $students = (string)$var->InterestedStudents;
        
        if ($students != NULL) {
            $students = $students . ", " . Session()->get('username');
            DB::table('post')
            ->where([
                ['ID', $request->postid],
                ['InterestedStudents', 'NOT LIKE', '%' . Session()->get('username') . '%'],
                ['UserID', '!=', Session()->get('id')]
            ])
            ->update(['InterestedStudents' => $students]);
        } else {
            $students = Session()->get('username');
            DB::table('post')
            ->where([
                ['ID', $request->postid],
                ['UserID', '!=', Session()->get('id')]
            ])
            ->update(['InterestedStudents' => $students]);
        }
        
        $item = DB::table('post')->orderBy('PostDateTime', 'desc')->get();
        $subjects = DB::table('course')->get();
        return view('tuition.viewtuition', compact('item', 'subjects'));
    }
    // Confirm
    public function ConfirmTuition()
    {
        # code...
        return view('tuition.confirmtuition');
    }
}
