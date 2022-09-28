@extends('layouts.master')

@section('body')

<div class="section-full  p-t80 p-b50 bg-white ">
    <div class="container">
    
        <!-- BLOG SECTION START -->
        <div class="section-content">
            <div class="row d-flex justify-content-center">
                <!--Block one-->
                @foreach ($noticias as $not)
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="blog-post date-style-2">
                                <div class="wt-post-media wt-img-effect zoom-slow">
                                    <a href="javascript:;"><img src="{{ url('img/noticias/'.$not->imagen) }}" style="width: 100%;height: 300px;" alt=""></a>
                                </div>
                                <div class="wt-post-info bg-white p-t30"> 
                                    <div class="wt-post-meta ">
                                        <ul>
                                            <li class="post-category"><span>{{$not->tipo}}</span> </li>
                                            <li class="post-date">
                                                <?php $mes = date("m", strtotime($not->fecha_publicacion)); ?>
                                                @if($mes == '01' ) Enero
                                                @endif
                                                @if($mes == '02' ) Febrero
                                                @endif
                                                @if($mes == '03' ) Marzo
                                                @endif
                                                @if($mes == '04' ) Abril
                                                @endif
                                                @if($mes == '05' ) Mayo
                                                @endif
                                                @if($mes == '06' ) Junio
                                                @endif
                                                @if($mes == '07' ) Julio
                                                @endif
                                                @if($mes == '08' ) Agosto
                                                @endif
                                                @if($mes == '09' ) Septiembre
                                                @endif
                                                @if($mes == '10' ) Octubre
                                                @endif
                                                @if($mes == '11' ) Noviembre
                                                @endif
                                                @if($mes == '12' ) Diciembre
                                                @endif
                                            
                                                
                                            {{date("d", strtotime($not->fecha_publicacion))}}, {{date("Y", strtotime($not->fecha_publicacion))}}
                                        </li> 
                                        </ul>
                                    </div>                                 
                                    <div class="wt-post-title ">
                                        <h3 class="post-title"><a href="{{url('noticiac/'.$not->id)}}" class="site-text-secondry">{{$not->titulo}}</a></h3>
                                    </div>
                                    <div class="wt-post-readmore ">
                                        <a href="" class="site-button-link black">
                                            {{substr($not->descripcion,0,90)}}...
                                        </a>
                                    </div>                                        
                            </div>                                
                            </div>
                        </div>
                @endforeach
                
                                     
            </div>
            
            <ul class="pagination m-b0 p-b0">
                {{$noticias->links()}}
              <li class="page-item"><a class="page-link" href="#">Previous</a></li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
                                       
        </div>
        
    </div>
    
 </div>
@endsection