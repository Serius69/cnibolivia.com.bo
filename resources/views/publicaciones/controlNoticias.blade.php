@extends('layouts.master')
@section('body')

<div class="container">
    <div class="row"> 
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2 style="margin: 15px;">Noticias</h2>
            </div>
            <div class="pull-right">
            <a class="btn btn-info" style="margin: 25px;" href="{{ route('noticias.create') }}"> Nueva Noticia</a>
            </div>
        </div>
    </div>
<table class="table table-bordered">
        <tr>
            <th>Titulo</th>
            <th>Tipo</th>
            <th>Descripcion</th>
            <th>Fecha publicacion</th>
            <th>Imagen</th>
            <th>URL</th>
            <th>Accion</th>
        </tr>
        @foreach ($noticias as $noticia)
        <tr> 
            <td>{{ $noticia->titulo }}</td>
            <td>{{ $noticia->tipo }}</td>
            <td>{{ $noticia->descripcion }}</td>
            <td>{{ $noticia->fecha_publicacion }}</td>
            <td><img src='{{ url('img/noticias/'.$noticia->imagen) }}' style="width: 80px;"  alt=""></td>
            <td> <a href="{{ $noticia->url }}">Link</a>  </td> 
            <td> 
                <a href="{{ url('editarNoticia/'.$noticia->id) }}" class="btn btn-warning">Editar</a>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection