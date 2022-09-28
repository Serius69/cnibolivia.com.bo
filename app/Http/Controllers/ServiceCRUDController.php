<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
// use App\Models\Type;

class ServiceCRUDController extends Controller
{
/**
* Display a listing of the resource.
*
* @return \Illuminate\Http\Response
*/
public function list()
{
$data['services'] = DB::table('services')->where('status','1')->orderBy('date_publication','ASC')->paginate(6);

return view('service.services', $data);
}
/**
* Display a listing of the resource.
*
* @return \Illuminate\Http\Response
*/
public function index()
{
$data['services'] = Service::orderBy('id','asc')->paginate(7);
return view('service.serviceCRUD', $data);
}
/**
* Show the form for creating a new resource.
*
* @return \Illuminate\Http\Response
*/
public function create()
{
$data['types'] = Typelatest::orderBy('id','asc')->paginate(10);
return view('service.create',$data);
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
'description' => 'required'
]);
$service = new Service;
$service->name = $request->name;
$service->description = $request->description;
$service->save();
return redirect()->route('services.index')
->with('success','service has been created successfully.');
}
/**
* Display the specified resource.
*
* @param  \App\Service  $service
* @return \Illuminate\Http\Response
*/
public function show(Service $service)
{
return view('service-single',compact('service'));
}
/**
* Show the form for editing the specified resource.
*
* @param  \App\Service  $service
* @return \Illuminate\Http\Response
*/
public function edit(Service $service)
{
return view('service.update',compact('service'));
}
/**
* Update the specified resource in storage.
*
* @param  \Illuminate\Http\Request  $request
* @param  \App\Service  $service
* @return \Illuminate\Http\Response
*/
public function update(Request $request, $id)
{
$request->validate([
'name' => 'required',
'description' => 'required',
'service_photo' => 'required',
]);
$service = service::find($id);
$service->name = $request->name;
$service->description = $request->description;
$service->save();
// return redirect()->route('services.edit',compact('service'))
// ->with('success','service Has Been updated successfully');
return view('service.edit',compact('service'))->with('success','service Has Been updated successfully');
}
/**
* Remove the specified resource from storage.
*
* @param  \App\Service  $service
* @return \Illuminate\Http\Response
*/
public function destroy(Service $service)
{
$service->delete();
return redirect()->route('services.index')
// ->with('success','service has been deleted successfully');
->with('success','service fue eliminada correctamente');
}
}
