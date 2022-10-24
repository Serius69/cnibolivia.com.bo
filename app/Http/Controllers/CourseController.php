<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    //
    public function list(){
        // $courses = DB::table('courses')->where('status','1')->orderBy('date_publication','ASC')->paginate(6);
        $data['courses'] = course::orderBy('date_publication','desc')->paginate(9);
        return view('course.list',$data);
    }
    public function listindex(){

        // $courses = DB::table('courses')->where('status','1')->orderBy('date_publication','ASC')->paginate(10);
        $data['courses'] = Course::orderBy('id','desc')->paginate(7);
        return view('course.courses',$data);
    }
    
    public function last_course($id){
        $courses = course::find($id);
        return view('course.single',compact('courses'));
    }

    /**
    * Display the specified resource.
    *
    * @param  \App\course  $course
    * @return \Illuminate\Http\Response
    */
    public function show($id)
    {
        $course = course::find($id);
        $courses=course::orderBy('date_publication','desc')->paginate(7);
        return view('course.single',compact('course','courses'));
    }
}