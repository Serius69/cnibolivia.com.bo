<?php

namespace App\Http\Controllers;

use App\Models\Latest;
use App\Models\Typelatest;
use Illuminate\Http\Request;
// use DB;
// use PhpParser\Node\Stmt\Echo_;

class LatestController extends Controller
{
    //
    public function list(){
        // $latests = DB::table('latests')->where('status','1')->orderBy('date_publication','ASC')->paginate(6);
        $data['latests'] = latest::orderBy('date_publication','desc')->paginate(9);
        return view('latest.latests',$data);
    }
    public function listindex(){

        // $latests = DB::table('latests')->where('status','1')->orderBy('date_publication','ASC')->paginate(10);
        $data['latests'] = latest::orderBy('id','desc')->paginate(7);
        return view('latest.latests',$data);
    }
    // public function create()
    // {
    //     $typelatest = DB::table('typelatest')->get();
    //     return view('latest/Crearlatests', compact('typelatest'));
    // }
    // public function store(Request $request)
    // {
    //     $status='1';
    //     $request->validate([
    //         'title' => 'required',
    //         'tipo' => 'required',
    //         'description' => 'required',
    //         'date_publication' => 'required',
    //     ]);
    //     if($request->file('file')!=null)
    //     {
    //         $file = $request->file('file');
    //         $file->move('img/latests', $file->getClientOriginalName());
    //         $imagen=$file->getClientOriginalName();
    //     }
    //     else
    //     {
    //         $imagen="sin_imagen.jpg";
    //     }
    //         $latest = new Latest;
    //             $latest->title=$request->title;
    //             $latest->description=$request->description;
    //             $latest->date_publication=$request->date_publication;
    //             // $latest->imagen=$imagen;
    //             $latest->url= $request->url;
    //             $latest->status=$status;
    //         $latest->save();

    //     return redirect()->route('latests.lista');
    // }
    // public function update(Request $request, $id)
    // {

    //     $request->validate([
    //         'title' => 'required',
    //         'tipo' => 'required',
    //         'description' => 'required',
    //         'date_publication' => 'required',
    //     ]);


    //         $n = latests::find($id);
    //         $nombre_imagen=$n->imagen;

    //             if ($request->file!=null)
    //             {
    //                 if($nombre_imagen=="sin_imagen.jpg")
    //                 {
    //                     $file = $request->file('file');
    //                     $file->move('img/latests', $file->getClientOriginalName());
    //                     $nombre_imagen=$file->getClientOriginalName();
    //                 }
    //                 else
    //                 {
    //                     $file = $request->file('file');
    //                     $file->move('img/latests', $nombre_imagen);
    //                 }
    //             }


    //     $latest = latests::find($id);
    //         $latest->tipo=$request->tipo;
    //         $latest->title=$request->title;
    //         $latest->description=$request->description;
    //         $latest->date_publication=$request->date_publication;
    //         $latest->imagen=$nombre_imagen;
    //         $latest->url= $request->url;
    //         $latest->status=1;
    //     $latest->save();

    //     return redirect()->route('latests.lista');
    // }


    // public function show($id){
    //     $not = Latest::find($id);
    //     // $latests=DB::table('latests')->get();
    //     return view('latest.latest-single',compact('not','latests'));
    // }

    public function last_latest($id){
        $latests = Latest::find($id);
        return view('latest.latest-single',compact('latests'));
    }

    /**
    * Display the specified resource.
    *
    * @param  \App\latest  $latest
    * @return \Illuminate\Http\Response
    */
    public function show($id)
    {
        $latest = Latest::find($id);
        $latests=Latest::orderBy('date_publication','desc')->paginate(7);
        return view('latest.latest-single',compact('latest','latests'));
    }
}
