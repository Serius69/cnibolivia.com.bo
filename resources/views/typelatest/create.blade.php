@extends('layouts.masteradmin')
@section('body')


<div class="container">
    <div class="row">
        <div class="col-md-9 col-md-center margin-tb">
            <div class="pull-left">
                <h2>Nuevo Tipo Noticia</h2>
            </div>
            <div class="pull-right">
                {{-- <a class="btn btn-primary" style="margin: 15px;" href="{{ route('typelatests.lista') }}"> Atras</a> --}}
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
            <form  action="{{ route('typelatests.store') }}" method="POST" files="true" enctype="multipart/form-data">
                @csrf
                 <div style="text-align: center;" class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <div class="row">
                                <div class="col">
                                    <strong ><h3>Tipo</h3></strong>
                                    <input type="text" style="margin: 15px;" name="type" class="form-control" >
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
