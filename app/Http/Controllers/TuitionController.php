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
    // Filter
    public function FilterTuition(Request $request)
    {
        # code...
        $co = $request->co;
        $gen = $request->gen;
        $pay = $request->pay;
        
        if($co != "")
{
	if( $pay !="")
	{
		if($gen != "")
		{
			$item = DB::table('post')
			->where([['CourseID',$co],
				 ['Gender',$gen],
				 ['Payment',$pay]])
			->orderBy('PostDateTime', 'desc')->get();
		}else{
			$item = DB::table('post')
			->where([['CourseID',$co],
				['Payment',$pay]])
			->orderBy('PostDateTime', 'desc')->get();
		}
				
	}
	else 
	{
		
		if($gen != "")
		{
			$item = DB::table('post')
			->where([['CourseID',$co],
				 ['Gender',$gen],])
			->orderBy('PostDateTime', 'desc')->get();
		}else{
			$item = DB::table('post')
			->where([['CourseID',$co],])
			->orderBy('PostDateTime', 'desc')->get();
		}
		
	}
}else
{
	if( $pay !="")
	{
		if($gen != "")
		{
			$item = DB::table('post')
			->where([['Gender',$gen],
				 ['Payment',$pay]])
			->orderBy('PostDateTime', 'desc')->get();
		}else{
			$item = DB::table('post')
			->where([['Payment',$pay]])
			->orderBy('PostDateTime', 'desc')->get();
		}
				
	}
	else 
	{
		
		if($gen != "")
		{
			$item = DB::table('post')
			->where([['Gender',$gen],])
			->orderBy('PostDateTime', 'desc')->get();
		}
		
	}	
}
        
        // $item = DB::table('post')->where([['CourseID',$co],['Gender',$gen],['Payment',$pay]])->orderBy('PostDateTime', 'desc')->get();
        $subjects = DB::table('course')->get();
        return view('tuition.viewtuition', compact('item', 'subjects'));
    }
    // Enroll Post
    public function EnrollTuition(Request $request)
    {
        # code...
        $var = DB::table('post')->where('ID', $request->postid)->first();
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
    public function ConfirmTuition(Request $request)
    {
        # code...
        // DB::table('post')->where([['ID', $request->postid]]);
        // echo $request->postid;
        // exit;

        $item_post = DB::table('post')
        ->where([['UserID',Session()->get('id')]
       ])->whereNotNull('TutorName')->whereNull('Result')->get();
        // echo '<pre>';
        // print_r($item_post);
        // exit;
        $subjects = DB::table('course')->get();
        return view('tuition.confirmtuition',compact('item_post','subjects'));
    }
    // Confirm Submit
    public function SubmitButton(Request $request)
    {
        # code...
        // 
        // echo $request->postid;
        // echo "hello";
        // exit;
        // $courseID = $request->input('courseID');
        // $description = $request->input('details');

        $Comment = $request->input('Comment');
        $Rating = $request->input('Rating');

        $data = array(
            "Comment" => $Comment,
            "Rating" => $Rating
        );
        DB::table('post')
            ->where([
                ['ID', $request->postid]
            ])
            ->update(['Comment'=> $Comment,'Rating' => $Rating,'Result' => '1']);

        // $item = DB::table('groupstudy')->where([['ID',Session()->get('id')]])->get();
        // $item_post = DB::table('post')->where([['UserID',Session()->get('id')]])->get();
        // $subjects = DB::table('course')->get();
        $data = DB::table('post')->where([['ID', $request->postid]]);
        return view('tuition.confirmtuition',compact('data'));
    }
}
