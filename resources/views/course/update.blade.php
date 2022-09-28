@extends('layouts.masteradmin')
@section('body')


<div class="container">
    <div class="row">
        <div class="col-md-9 col-md-center margin-tb">
            <div class="pull-left">
                <h2>Editar Curso</h2>
            </div>
            <div class="pull-right">
                {{-- <a class="btn btn-primary" style="margin: 15px;" href="{{ route('courses.list') }}"> Atras</a> --}}
            </div>
        </div>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> Hay un error.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        <div class="col-md-9 col-md-center margin-tb">
            <form  action="{{ route('courses.update',$course->id) }}" method="POST" files="true" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                 <div style="text-align: center;" class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <div class="row">
                                <div class="col">
                                    <strong ><h3>ID del curso {{ $course->id}}</h3></strong>
                                </div>
                                <div class="col">
                                    <strong ><h3>Titulo</h3></strong>
                                    <input type="text" style="margin: 15px;" name="title" class="form-control" value="{{ $course->title}}">
                                </div>
                                {{-- <div class="col">
                                    <strong ><h3>Tipo</h3></strong>
                                    <input type="text" style="margin: 15px;" name="tipo" class="form-control" value="{{ $course->tipo }}">

                                </div> --}}
                            </div>
                            <div class="row">
                                <div class="col">
                                    <strong ><h3>Descripcion</h3></strong>
                                    <input type="text"  name="description" class="form-control" value="{{ $course->description }}">
                                </div>
                            </div>
                            <div class="col">
                                <strong ><h3>Tipo</h3></strong>
                                <select name="type_id" id="">
                                    @foreach($types as $type)
                                        <option value="{{ $type->id }}">{{ $type->type }}</option>
                                    @endforeach
                                </select>

                            </div>

                            <div class="row">
                                <div class="col">
                                    <strong ><h3>Fecha de publicación</h3></strong>
                                    <input style="margin: 15px;" type="date" id="fecha_publicacion" min="2022-01-01" max="2089-12-31" name="date_publication" value="{{ $course->date_publication }}">
                                </div>
                                <div class="col">
                                    <strong><h3>Imagen</h3></strong>
                                    <input type="file"  name="path1" class="form-control" >
                                </div>
                                <div class="col">
                                    <strong ><h3>URL</h3></strong>
                                    <input type="text"  name="url" class="form-control" value="{{ $course->url }}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                            <button style="margin: 15px;" type="submit" class="btn btn-primary">Actualizar</button>
                    </div>
                </div>
            </form>
        </div>
        </div>
    </div>
</div>




@endsection
