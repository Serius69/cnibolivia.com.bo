<?php
namespace App\Http\Controllers;

use App\Models\Latest;
use App\Models\Typelatest;
use Illuminate\Http\Request;

class LatestCRUDController extends Controller
{
    /**
* Display a listing of the resource.
*
* @return \Illuminate\Http\Response
*/
public function list()
{
// $data['latests'] = DB::table('latests')->where('status','1')->orderBy('date_publication','ASC')->paginate(6);
$data['latests'] = Latest::orderBy('date_publication','asc')->paginate(7);
return view('latest.latests', $data);
}
/**
* Display a listing of the resource.
*
* @return \Illuminate\Http\Response
*/
public function index()
{
$data['latests'] = Latest::orderBy('id','asc')->paginate(10);
return view('latest.latestCRUD', $data);
}
/**
* Show the form for creating a new resource.
*
* @return \Illuminate\Http\Response
*/
public function create()
{
$data['types'] = Typelatest::orderBy('id','asc')->paginate(100);
return view('latest.create',$data);
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
'title' => 'required',
'description' => 'required',
'date_publication' => 'required',
'type_id' => 'required',
'url' => 'required',
'path' => 'required'
]);

if($request->file('path')!=null)
{
    $file = $request->file('path');
    $file->move('img/noticias', $file->getClientOriginalName());
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
        //  $latest->photo_id = $photo2->id;
        //  $latest->save();
        $latest = new Latest;
        $latest->title = $request->title;
        $latest->description = $request->description;
        $latest->date_publication = $request->date_publication;
        $latest->url = $request->url;
        $latest->type_id = $request->type_id;
        $latest->path= $imagen;
        $latest->save();
        $data['latests'] = latest::orderBy('id','desc')->paginate(10);

        return view('latest.latestCRUD',$data)->with('success','latest Has Been updated successfully');
        // return redirect()->route('users.index')->with('success', 'User Deleted successfully.');

}
/**
* Destroy an specific element
*
* @param  \App\Latest  $latest
* @return \Illuminate\Http\Response
*/
public function show(Latest $latest)
{
        $latest->status=0;
         $latest->save();
         $data['latests'] = latest::orderBy('id','asc')->paginate(10);
         return view('latest.latestCRUD',$data)->with('success','latest Has Been updated successfully');
}
/**
* Show the form for editing the specified resource.
*
* @param  \App\Latest  $latest
* @return \Illuminate\Http\Response
*/
public function edit(Latest $latest)
{
    $types= Typelatest::orderBy('id','asc')->paginate(10);
return view('latest.update',compact('latest','types'));
}
/**
* Update the specified resource in storage.
*
* @param  \Illuminate\Http\Request  $request
* @param  \App\latest  $latest
* @return \Illuminate\Http\Response
*/
public function update(Request $request, $id)
{
$request->validate([
'title' => 'required',
'description' => 'required',
'type_id' => 'required',
'date_publication' => 'required',
]);
        if($request->file('path1')!=null)
         {
             $file = $request->file('path1');
             $file->move('img/noticias', $file->getClientOriginalName());
             $imagen1=$file->getClientOriginalName();
         }
         else
         {
             $imagen1="sin_imagen.jpg";
         }
$latest = Latest::find($id);
$latest->title = $request->title;
$latest->description = $request->description;
$latest->date_publication = $request->date_publication;
$latest->type_id = $request->type_id;
$latest->url = $request->url;
$latest->path = $imagen1;
$latest->save();
$data['latests'] = Latest::orderBy('id','asc')->paginate(10);
// return redirect()->route('latests.edit',compact('latest'))
// ->with('success','latest Has Been updated successfully');
return view('latest.latestCRUD',$data)->with('success','latest Has Been updated successfully');
}
/**
* Remove the specified resource from storage.
*
* @param  \App\latest  $latest
* @return \Illuminate\Http\Response
*/
public function destroy(Request $request, $id)
{
    // $request->validate([
    //     'title' => 'required',
    //     'subtitle' => 'required',
    //     ]);
        $latest = Latest::find($id);
        $latest->title = $request->title;
        $latest->description = $request->description;
        $latest->date_publication = $request->date_publication;
        $latest->url = $request->url;
        $latest->status=0;
        $latest->save();
        $data['latests'] = Latest::orderBy('id','asc')->paginate(10);
        return view('latest.latestCRUD',$data)->with('success','latest Has Been updated successfully');
}
}
