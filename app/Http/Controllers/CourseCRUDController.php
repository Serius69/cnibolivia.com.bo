<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseCRUDController extends Controller
{
    /**
* Display a listing of the resource.
*
* @return \Illuminate\Http\Response
*/
public function list()
{
// $data['courses'] = DB::table('courses')->where('status','1')->orderBy('date_publication','ASC')->paginate(6);
$data['courses'] = course::orderBy('date_publication','asc')->paginate(7);
return view('course.courses', $data);
}
/**
* Display a listing of the resource.
*
* @return \Illuminate\Http\Response
*/
public function index()
{
$data['courses'] = Course::orderBy('id','asc')->paginate(10);
return view('course.crud', $data);
}
/**
* Show the form for creating a new resource.
*
* @return \Illuminate\Http\Response
*/
public function create()
{
// $data['types'] = Typecourse::orderBy('id','asc')->paginate(100);
return view('course.create');
}
/**
* Store a newly created resource in storage.
*
* @param  \Illuminate\Http\Request  $request
* @return \Illuminate\Http\Response
*/
public function store(Request $request)
{
$request->validate([
'name' => 'required',
'description' => 'required',
'date_publication' => 'required',
'type_id' => 'required',
'url' => 'required',
'path' => 'required'
]);

if($request->file('path')!=null)
{
    $file = $request->file('path');
    $file->move('img/cursos', $file->getClientOriginalName());
    $imagen=$file->getClientOriginalName();
}
else
{
    $imagen="sin_imagen.jpg";
}
        //  $save = new Photo;
        //  $save->path = $request->path;
        //  $save->save();
        //  $photo2 = Photo::find($imagen1);
        //  $course->photo_id = $photo2->id;
        //  $course->save();
        $course = new course;
        $course->name = $request->name;
        $course->description = $request->description;
        $course->url = $request->url;
        $course->path= $imagen;
        $course->save();
        $data['courses'] = course::orderBy('id','desc')->paginate(10);

        return view('course.crud',$data)->with('success','course Has Been updated successfully');
        // return redirect()->route('users.index')->with('success', 'User Deleted successfully.');

}
/**
* Destroy an specific element
*
* @param  \App\course  $course
* @return \Illuminate\Http\Response
*/
public function show(course $course)
{
        $course->status=0;
         $course->save();
         $data['courses'] = course::orderBy('id','asc')->paginate(10);
         return view('course.crud',$data)->with('success','course Has Been updated successfully');
}
/**
* Show the form for editing the specified resource.
*
* @param  \App\course  $course
* @return \Illuminate\Http\Response
*/
public function edit(course $course)
{
return view('course.update',compact('course'));
}
/**
* Update the specified resource in storage.
*
* @param  \Illuminate\Http\Request  $request
* @param  \App\course  $course
* @return \Illuminate\Http\Response
*/
public function update(Request $request, $id)
{
$request->validate([
'name' => 'required',
'description' => 'required',
'type_id' => 'required',
'date_publication' => 'required',
]);
        if($request->file('path1')!=null)
         {
             $file = $request->file('path1');
             $file->move('img/cursos', $file->getClientOriginalName());
             $imagen1=$file->getClientOriginalName();
         }
         else
         {
             $imagen1="sin_imagen.jpg";
         }
$course = course::find($id);
$course->name = $request->name;
$course->description = $request->description;
$course->url = $request->url;
$course->path = $imagen1;
$course->save();
$data['courses'] = course::orderBy('id','asc')->paginate(10);
// return redirect()->route('courses.edit',compact('course'))
// ->with('success','course Has Been updated successfully');
return view('course.crud',$data)->with('success','course Has Been updated successfully');
}
/**
* Remove the specified resource from storage.
*
* @param  \App\course  $course
* @return \Illuminate\Http\Response
*/
public function destroy(Request $request, $id)
{
    // $request->validate([
    //     'name' => 'required',
    //     'subname' => 'required',
    //     ]);
        $course = course::find($id);
        $course->name = $request->name;
        $course->description = $request->description;
        $course->url = $request->url;
        $course->status=0;
        $course->save();
        $data['courses'] = course::orderBy('id','asc')->paginate(10);
        return view('course.crud',$data)->with('success','course Has Been updated successfully');
}
}

