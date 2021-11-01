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
    public function ViewGroupStudy()
    {
        # code...
        $item = DB::table('groupstudy')->get();
        return view('groupstudy.viewgroupstudy', compact('item'));
    }
}
