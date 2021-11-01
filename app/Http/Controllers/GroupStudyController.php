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

        $grpstudy = new GroupStudy();
        $grpstudy->CourseID = $request->courseID;
        $grpstudy->GroupStudyDescription = $request->details;
        $grpstudy->GroupStudyStartTime = $request->stime;
        $grpstudy->GroupStudyEndTime = $request->etime;
        $grpstudy->save();
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
