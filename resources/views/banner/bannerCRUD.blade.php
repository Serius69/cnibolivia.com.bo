@extends('layouts.masteradmin')
@section('body')

<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2 style="margin: 15px;">Banner ADMIN</h2>
            </div>
            <div class="pull-right">
            <a class="btn btn-info" style="margin: 25px;" href="{{ route('banners.create') }}"> Nuevo Banner</a>
            </div>
        </div>
    </div>
<table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Titulo</th>
            <th>Subtitulo</th>
            <th>URL</th>
            <th>Imagen</th>
            <th>Imagen de Fondo</th>
            <th>Accion</th>
        </tr>
        @foreach ($banners as $banner)
        @if (($banner->status)==1)
        <tr>
            <td>{{ $banner->id }}</td>
            <td>{{ $banner->title }}</td>
            <td>{{ $banner->subtitle }}</td>
            <td> <a href="{{ $banner->url }}">URL externa</a>  </td>
            <td><img src="{{ url('img/banners_inicio/'.$banner->path1) }}"  alt="image"></td>

            <td><img src="{{ url('img/banners_inicio/'.$banner->path2) }}"  alt="image background"></td>
            <td>
                <a class="btn btn-primary" href="{{ route('banners.edit',$banner->id) }}">Editar</a>
                @csrf
                @method('PUT')
                <a class="btn btn-warning" href="{{ route('banners.destroy',$banner->id) }}">Eliminar</a>
            </td>
        </tr>
        @endif

        @endforeach
    </table>
    <div class="d-flex">
        {!! $banners->links() !!}
    </div>

</div>
@endsection
