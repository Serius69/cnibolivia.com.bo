@extends('layouts.master')

@section('body')

<div class="section-full  p-t80 p-b50 bg-white" style="transform: none;">
    <div class="container" style="transform: none;">
    
        <!-- BLOG SECTION START -->
        <div class="section-content" style="transform: none;">
            <div class="row d-flex justify-content-center" style="transform: none;">
            
                <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 m-b30">
                   <!-- BLOG START -->
                    <div class="blog-post date-style-2 blog-lg">
                        <div class="wt-post-media wt-img-effect zoom-slow">
                            <a href="javascript:;"><img src="{{ url('img/noticias/'.$not->imagen) }}"  alt=""></a>
                        </div>
                        <div class="wt-post-info  bg-white p-t30">
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
                                <h2 class="post-title">{{$not->titulo}}</h2>
                            </div>
                           
                            <div class="wt-post-text">
                                    <p style="text-align: justify" >{{ $not->descripcion }}</p>
                            </div>  

                            <div class="wt-post-title ">
                                <a href="">
                                    
                                </a>
                            </div>
                            <div class="wt-post-title ">
                                <a href="">
                                    <h4 class="post-title">Descarga información adjunta en el siguiente enlace >> {{$not->url}}</h4>
                                </a>
                            </div>
                            
                                            
                        </div>
                    </div>
                    
                                                 

                   
                     
                </div> 
                
                <!-- SIDE BAR START -->
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 rightSidebar  m-b30" style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">
                
                    

                <div class="theiaStickySidebar" style="padding-top: 0px; padding-bottom: 1px; position: static; transform: none; top: 0px; left: 1156.5px;"><aside class="side-bar">
                        
                                                     
                           <!-- RECENT POSTS -->
                           <div class="widget recent-posts-entry p-a20">
                                <div class="text-left m-b30">
                                    <h3 class="widget-title">Noticias Recientes</h3>
                                </div>   
                                @foreach ($noticias as $not)                                 
                                <div class="section-content">
                                    <div class="widget-post-bx">
                                      
                                        <div class="widget-post clearfix">
                                            <div class="wt-post-media">
                                                <img src="{{ url('img/noticias/'.$not->imagen) }}" alt="">
                                            </div>
                                            <div class="wt-post-info">
                                                <div class="wt-post-header">
                                                    <h6 class="post-title"> <a href="#">{{$not->titulo}}</a></h6>
                                                </div>                                                    
                                                <div class="wt-post-meta">
                                                    <ul>
                                                        <li class="post-author">{{ $not->fecha_publicacion }}</li>
                                                    </ul>
                                                </div>                                            
                                            </div>
                                        </div>
                                                                                                         
                                    </div>
                                </div>
                                @endforeach  
                            </div>
                                                                                             
                           <!-- CATEGORY  
                           <div class="widget widget_services p-a20">
                                <div class="text-left m-b30">
                                    <h3 class="widget-title">Categorias</h3>
                                    
                                </div>
                                <ul>
                                    <li><a href="javascript:void(0);">Applin</a><span class="badge">28</span></li>
                                    <li><a href="javascript:void(0);">Makeup</a><span class="badge">05</span></li>
                                    <li><a href="javascript:void(0);">Business</a><span class="badge">24</span></li>
                                    <li><a href="javascript:void(0);">Government</a><span class="badge">15</span></li>
                                    <li><a href="javascript:void(0);">Investment</a><span class="badge">20</span></li>
                                    <li><a href="javascript:void(0);">Life</a><span class="badge">15</span></li>
                                    <li><a href="javascript:void(0);">Techniq</a><span class="badge">20</span></li>   
                                                                                
                                </ul>
                            </div>                                               
                                   -->                                   
                           <!-- TAGS 
                           <div class="widget widget_tag_cloud p-a20">
                                <div class="text-left m-b30">
                                    <h3 class="widget-title">Tags</h3>
                                    
                                </div>  
                                                                  
                                <div class="tagcloud">
                                    <a href="javascript:void(0);">Analytics</a>
                                    <a href="javascript:void(0);">Business </a>
                                    <a href="javascript:void(0);">Consulting</a>                                            
                                    <a href="javascript:void(0);">Solutions </a>
                                    <a href="javascript:void(0);">Development</a>
                                    <a href="javascript:void(0);">Stock</a>
                                    <a href="javascript:void(0);">Finance</a>

                                    <a href="javascript:void(0);">Innovation</a>
                                    <a href="javascript:void(0);">Investing</a>
                                    <a href="javascript:void(0);">Strategic</a>                                                
                                    <a href="javascript:void(0);">Management</a>
                                    <a href="javascript:void(0);">Data </a>
                                    <a href="javascript:void(0);">Planning </a>
                                    <a href="javascript:void(0);">Firm</a>                                                
                                    <a href="javascript:void(0);">Security</a>
                                    <a href="javascript:void(0);">Tax</a>                                            
                                    
                                </div>
                            </div>
                            -->
                           <!-- Social 
                           <div class="widget p-a20">
                                <div class="widget_social_inks">
                                    <ul class="social-icons social-square social-darkest social-md">
                                        <li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
                                        <li><a href="javascript:void(0);" class="fa fa-twitter"></a></li>
                                        <li><a href="javascript:void(0);" class="fa fa-linkedin"></a></li>
                                        <li><a href="javascript:void(0);" class="fa fa-rss"></a></li>
                                        <li><a href="javascript:void(0);" class="fa fa-youtube"></a></li>
                                        <li><a href="javascript:void(0);" class="fa fa-instagram"></a></li>
                                    </ul>
                                </div>
                            </div>  -->                                        
                      
                       </aside></div></div>
                <!-- SIDE BAR END -->                         

                                            
            </div>
                                     
        </div>
        
    </div>
    
 </div>

@endsection