<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TuitionController extends Controller
{
    //
    public function CreateTuition()
    {
        # code...
        return view('tuition.createtuition');
    }
    //
    public function ViewTuition()
    {
        # code...
        return view('tuition.viewtuition');
    }
    //
    public function ConfirmTuition()
    {
        # code...
        return view('tuition.confirmtuition');
    }
}
