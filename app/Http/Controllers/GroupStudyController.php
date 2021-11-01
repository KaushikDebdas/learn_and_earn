<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\GroupStudy;
use App\Models\Course;

class GroupStudyController extends Controller
{
    //
    public function CreateGroupStudy()
    {
        # code...
        $item = DB::table('course')->get();
        return view('groupstudy.creategroupstudy', compact('item'));
    }
    //
    public function InsertGroupStudy(Request $request)
    {
        # code...
        $courseID = $request->input('courseID');
        $description = $request->input('details');
        $stime = $request->input('stime');
        $etime = $request->input('etime');
        $data = array(
            "UserID" => 1,
            "CourseID" => $courseID,
            "GroupStudyDescription" => $description,
            "GroupStudyStartTime" => $stime,
            "GroupStudyEndTime" => $etime
        );

        DB::table('groupstudy')->insert($data);
        $item = DB::table('groupstudy')->get();
        return view('groupstudy.viewgroupstudy', compact('item'));
    }
    //
    public function ViewGroupStudy()
    {
        # code...
        $item = DB::table('groupstudy')->get();
        return view('groupstudy.viewgroupstudy', compact('item'));
    }
}
