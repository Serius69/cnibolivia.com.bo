<?php

namespace App\Http\Controllers;

use App\Models\Noticias;
use Illuminate\Http\Request;
use DB;
use PhpParser\Node\Stmt\Echo_;

class NoticiasController extends Controller
{
    //
    public function listnoticias(){
        $noticias = DB::table('noticias')->where('status','1')->orderBy('fecha_publicacion','ASC')->paginate(2);
 
        return view('publicaciones/noticias',compact('noticias'));
    }
    public function listado(){
        
        $noticias = DB::table('noticias')->where('status','1')->orderBy('fecha_publicacion','ASC')->paginate(2);
        
        return view('publicaciones/controlNoticias',compact('noticias'));
    }
    public function create()
    {
        $tiponoticias = DB::table('tiponoticias')->get();
        return view('publicaciones/CrearNoticias', compact('tiponoticias'));
    }
    public function store(Request $request)
    {
        $status='1';
        $request->validate([
            'titulo' => 'required',
            'tipo' => 'required',
            'descripcion' => 'required',
            'fecha_publicacion' => 'required', 
        ]);
        if($request->file('file')!=null)
        {
            $file = $request->file('file');
            $file->move('img/noticias', $file->getClientOriginalName());
            $imagen=$file->getClientOriginalName();
        }
        else
        {
            $imagen="sin_imagen.jpg";
        }
            $noti = new Noticias;
                $noti->tipo=$request->tipo;
                $noti->titulo=$request->titulo;
                $noti->descripcion=$request->descripcion;
                $noti->fecha_publicacion=$request->fecha_publicacion;
                $noti->imagen=$imagen;
                $noti->url= $request->url;
                $noti->status=$status;
            $noti->save(); 
       
        return redirect()->route('noticias.lista');
    }
    public function update(Request $request, $id)
    {
         
        $request->validate([
            'titulo' => 'required',
            'tipo' => 'required',
            'descripcion' => 'required',
            'fecha_publicacion' => 'required', 
        ]);
       

            $n = Noticias::find($id);
            $nombre_imagen=$n->imagen;

                if ($request->file!=null)
                {
                    if($nombre_imagen=="sin_imagen.jpg")
                    {
                        $file = $request->file('file');
                        $file->move('img/noticias', $file->getClientOriginalName());
                        $nombre_imagen=$file->getClientOriginalName();
                    }
                    else
                    {
                        $file = $request->file('file');
                        $file->move('img/noticias', $nombre_imagen);
                    }
                }

        
        $noti = Noticias::find($id);
            $noti->tipo=$request->tipo;
            $noti->titulo=$request->titulo;
            $noti->descripcion=$request->descripcion;
            $noti->fecha_publicacion=$request->fecha_publicacion;
            $noti->imagen=$nombre_imagen;
            $noti->url= $request->url;
            $noti->status=1;
        $noti->save();
  
        return redirect()->route('noticias.lista'); 
    }

    public function editar($id)
    {
        $noti = Noticias::find($id);
        return view('publicaciones/UpdateNoticias',compact('noti'));
    }
    public function destroy(Noticias $noticias)
    {
        $update = DB::table('noticias') ->where('id', $noticias['id']) ->limit(1) ->update( [ 'status' => 0]); 

        return view('publicaciones/controlNoticias',compact('noticias'));
    }

    public function vistaNoticia($id){
        $noti = Noticias::find($id);
        return view('/publicaciones/noticiac',compact('noti'));
    }


    public function vernoticia($id){
        $not = Noticias::find($id);
        $noticias=DB::table('noticias')->get();
        return view('/publicaciones/noticiacompleta',compact('not','noticias'));
    }

    public function noticiasrecientes($id){
        $noticias = Noticias::find($id); 
        return view('/noticia/{id}',compact('noticias'));
    }

    
    
}
