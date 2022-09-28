@extends('layouts.masteradmin')
@section('body')

<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2 style="margin: 15px;">Cursos ADMIN</h2>
            </div>
            <div class="pull-right">
            <a class="btn btn-info" style="margin: 25px;" href="{{ route('courses.create') }}"> Nueva Noticia</a>
            </div>
        </div>
    </div>

    {{-- Message --}}
    @if (Session::has('success'))
    <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert">
            <i class="fa fa-times"></i>
        </button>
        <strong>Success !</strong> {{ session('success') }}
    </div>
    @endif

    @if (Session::has('error'))
    <div class="alert alert-danger alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert">
            <i class="fa fa-times"></i>
        </button>
        <strong>Error !</strong> {{ session('error') }}
    </div>
    @endif

<table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Tipo</th>
            <th>Descripcion</th>
            <th>Fecha publicacion</th>
            <th>Imagen</th>
            <th>URL</th>
            <th>Accion</th>
        </tr>
        @foreach ($courses as $course)
        @if (($course->status)==1)
        <tr>
            <td>{{ $course->id }}</td>
            <td>{{ $course->title }}</td>
            <td>{{ $course->type->type }}</td>            
            <td>{{ $course->description }}</td>
            <td>{{ $course->date_publication }}</td>
            <td><img src="{{ url('img/noticias/'.$course->path) }}"  alt="Greenture"></td>
            <td> <a href="{{ $course->url }}">URL externa</a>  </td>
            <td>
                <a class="btn btn-primary" href="{{ route('courses.edit',$course->id) }}">Editar</a>
                <a class="btn btn-warning" href="{{ route('courses.destroy',$course->id) }}">Eliminar</a>
            </td>
        </tr>
        @endif

        @endforeach
    </table>
    {!! $courses->links() !!}

</div>
@endsection
