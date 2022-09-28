<?php

namespace App\Http\Controllers;
use App\Models\Typelatest;
use Illuminate\Http\Request;

class TypelatestCRUDController extends Controller
{
    /**
* Display a listing of the resource.
*
* @return \Illuminate\Http\Response
*/
public function list()
{
// $data['typelatests'] = DB::table('typelatests')->where('status','1')->orderBy('date_publication','ASC')->paginate(6);
$data['typelatests'] = Typelatest::orderBy('id','asc')->paginate(7);
return view('typelatest.typelatests', $data);
}
/**
* Display a listing of the resource.
*
* @return \Illuminate\Http\Response
*/
public function index()
{
$data['typelatests'] = Typelatest::orderBy('id','asc')->paginate(10);
return view('typelatest.typelatestCRUD', $data);
}
/**
* Show the form for creating a new resource.
*
* @return \Illuminate\Http\Response
*/
public function create()
{
$data['types'] = Typelatest::orderBy('id','asc')->paginate(10);
return view('typelatest.create',$data);
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
'type' => 'required'
]);

        $typelatest = new Typelatest;
        $typelatest->type = $request->type;
        $typelatest->save();
        $data['typelatests'] = Typelatest::orderBy('id','desc')->paginate(10);

        return view('typelatest.typelatestCRUD',$data)->with('success','typelatest Has Been updated successfully');
        // return redirect()->route('users.index')->with('success', 'User Deleted successfully.');

}
/**
* Display the specified resource.
*
* @param  \App\Typelatest  $typelatest
* @return \Illuminate\Http\Response
*/
public function show(Typelatest $typelatest)
{
        $typelatest->status=0;
         $typelatest->save();
         $data['typelatests'] = Typelatest::orderBy('id','asc')->paginate(10);
         return view('typelatest.typelatestCRUD',$data)->with('success','typelatest Has Been updated successfully');
}
/**
* Show the form for editing the specified resource.
*
* @param  \App\Typelatest  $typelatest
* @return \Illuminate\Http\Response
*/
public function edit(Typelatest $typelatest)
{
    $types= Typelatest::orderBy('id','asc')->paginate(10);
return view('typelatest.update',compact('typelatest','types'));
}
/**
* Update the specified resource in storage.
*
* @param  \Illuminate\Http\Request  $request
* @param  \App\Typelatest  $typelatest
* @return \Illuminate\Http\Response
*/
public function update(Request $request, $id)
{
$request->validate([
'type' => 'required',
]);
        
$typelatest = Typelatest::find($id);
$typelatest->type = $request->type;
$typelatest->save();
$data['typelatests'] = Typelatest::orderBy('id','asc')->paginate(10);
return view('typelatest.typelatestCRUD',$data)->with('success','typelatest Has Been updated successfully');
}
/**
* Remove the specified resource from storage.
*
* @param  \App\Typelatest  $typelatest
* @return \Illuminate\Http\Response
*/
public function destroy(Request $request, $id)
{
    // $request->validate([
    //     'title' => 'required',
    //     'subtitle' => 'required',
    //     ]);
        $typelatest = Typelatest::find($id);
        $typelatest->type = $request->type;
        $typelatest->status=0;
        $typelatest->save();
        $data['typelatests'] = Typelatest::orderBy('id','asc')->paginate(10);
        return view('typelatest.typelatestCRUD',$data)->with('success','typelatest Has Been updated successfully');
}
}

