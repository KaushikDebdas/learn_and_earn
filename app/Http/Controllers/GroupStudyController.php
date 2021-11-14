<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\GroupStudy;
use App\Models\Course;
use Illuminate\Contracts\Session\Session;

class GroupStudyController extends Controller
{
    // Create
    public function CreateGroupStudy()
    {
        # code...
        $item = DB::table('course')->get();
        return view('groupstudy.creategroupstudy', compact('item'));
    }
    // Insert
    public function InsertGroupStudy(Request $request)
    {
        # code...
        $courseID = $request->input('courseID');
        $description = $request->input('details');
        $stime = $request->input('stime');
        $etime = $request->input('etime');
        $data = array(
            "UserID" => Session()->get('id'),
            "CourseID" => $courseID,
            "GroupStudyDescription" => $description,
            "GroupStudyStartTime" => $stime,
            "GroupStudyEndTime" => $etime
        );

        DB::table('groupstudy')->insert($data);
        $item = DB::table('groupstudy')->orderBy('GroupDateTime','desc')->get();
        $subjects = DB::table('course')->get();
        return view('groupstudy.viewgroupstudy', compact('item', 'subjects'));
    }
    // View
    public function ViewGroupStudy()
    {
        # code...
        $item = DB::table('groupstudy')->orderBy('GroupDateTime','desc')->get();
        $subjects = DB::table('course')->get();
        return view('groupstudy.viewgroupstudy', compact('item', 'subjects'));
    }
    // Enroll Group Study
    public function EnrollGroupStudy(Request $request)
    {
        # code...
        $var = DB::table('groupstudy')
            ->where('ID', $request->groupstudyid)->first();
        $students = (string)$var->InterestedStudents;
        if ($students != NULL) {
            $students = $students . ", " . Session()->get('username');
            DB::table('groupstudy')
                ->where([
                    ['ID', $request->groupstudyid],
                    ['InterestedStudents', 'NOT LIKE', '%' . Session()->get('username') . '%'],
                    ['UserID', '!=', Session()->get('id')]
                ])
                ->update(['InterestedStudents' => $students]);
        } else {
            $students = Session()->get('username');
            DB::table('groupstudy')
                ->where([
                    ['ID', $request->groupstudyid],
                    ['UserID', '!=', Session()->get('id')]
                ])
                ->update(['InterestedStudents' => $students]);
        }


        $item = DB::table('groupstudy')->get();
        $subjects = DB::table('course')->get();
        return view('groupstudy.viewgroupstudy', compact('item', 'subjects'));
    }
}
