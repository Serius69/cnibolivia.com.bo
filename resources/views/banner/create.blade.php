@extends('layouts.masteradmin')
@section('body')


<div class="container">
    <div class="row">
        <div class="col-md-9 col-md-center margin-tb">
            <div class="pull-left">
                <h2>Nueva Banner</h2>
            </div>
            <div class="pull-right">
                {{-- <a class="btn btn-primary" style="margin: 15px;" href="{{ route('latests.lista') }}"> Atras</a> --}}
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
            <form  action="{{ route('banners.store') }}" method="POST" files="true" enctype="multipart/form-data">
                @csrf
                 <div style="text-align: center;" class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <div class="row">
                                <div class="col">
                                    <strong ><h3>Titulo</h3></strong>
                                    <input type="text" style="margin: 15px;" name="title" class="form-control" >
                                </div>
                                <div class="col">
                                    <strong ><h3>Subtitulo</h3></strong>
                                    <input type="text" style="margin: 15px;" name="subtitle" class="form-control" >
                                </div>

                            </div>
                            <div class="row">
                                <div class="col">
                                    <strong ><h3>Descripcion</h3></strong>
                                    <input type="text"  name="description" class="form-control" >
                                </div>
                            </div>
                            <div class="col">
                                <strong><h3>Imagen</h3></strong>
                                <input type="file"  name="path1" class="form-control" >
                            </div>
                            <div class="col">
                                <strong><h3>Imagen de fondo</h3></strong>
                                <input type="file"  name="path2" class="form-control" >
                            </div>
                            <div class="col">
                                <strong ><h3>URL</h3></strong>
                                <input type="text"  name="url" class="form-control" >
                            </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                            <button style="margin: 15px;" type="submit" class="btn btn-primary">Registrar</button>
                    </div>
                </div>
            </form>
        </div>
        </div>
    </div>
</div>




@endsection
