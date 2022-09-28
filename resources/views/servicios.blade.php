@extends('layouts.master')
@section('body')
<div class="wt-bnr-inr overlay-wraper bg-center" style="background-image:url(images/banner/2.jpg);">
    <div class="overlay-main site-bg-secondry opacity-07"></div>
    <div class="container">
        <div class="wt-bnr-inr-entry">
            <div class="banner-title-outer">
                <div class="banner-title-name">
                    <h2 style="color: aliceblue" class="site-text-primary">SERVICIOS PARA NUESTROS ASOCIADOS</h2>
                </div>
            </div>
            <!-- BREADCRUMB ROW -->                            
            
                <div>
                    <ul class="wt-breadcrumb breadcrumb-style-2">
                        <li><a href="javascript:void(0);">INICIO</a></li>
                        <li style="color: aliceblue" >SERVICIOS</li>
                    </ul>
                </div>
            
            <!-- BREADCRUMB ROW END -->                        
        </div>
    </div>
</div>

<div class="section-full small-device  p-t80 p-b50 bg-white" style="transform: none;">
    <div class="section-content" style="transform: none;">
        <div class="container" style="transform: none;">
            <div class="row" style="transform: none;">
            
                <div class="col-lg-4 col-md-12 rightSidebar" style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">
                     
                    
                    
                <div class="theiaStickySidebar" style="padding-top: 0px; padding-bottom: 1px; position: static; transform: none; top: 0px; left: 396.5px;"><div class="all_services">
                        <ul>
                            <li><a href="{{ url('servicios') }}" class="active">NUESTROS SERVICIOS</a></li>
                            <li><a href="{{ url('representacion') }}">REPRESENTACIÓN</a></li>
                            <li><a href="{{ url('servicioalasociado') }}">SERVICIO AL ASOCIADO</a></li> 
                            <li><a href="{{ url('serviciosjuridicos') }}">SERVICIOS JURIDICOS</a></li>
                            <li><a href="{{ url('capacitaciones') }}">CAPACITACIÓNES</a></li>
                           <!-- <li><a href="{{ url('serviciosadicionales') }}">SERVICIOS ADICIONALES</a></li>     -->                             
                        </ul>
                    </div>
                   
                </div>
            </div>
                
                <div class="col-lg-8 col-md-12">
                    <div class="section-content">
                        <!-- TITLE START -->
                        <div class="text-left">
                            <h2 class="wt-title">PARA NUESTROS ASOCIADOS</h2>
                        </div>
                        <!-- TITLE END -->                                
                       <div class="wt-box services-etc m-b30">
                           <p style="text-align: justify" class="wt-info">La cámara nacional de industrias ofrece los siguiente servicios a nuestros asociados a nivel nacional, con el fin de fortalecer en las distintas areas inbolucradas o que requieran apoyo.</p>                                   
                               <div class="wt-media m-b30">
                                   <img style="justify-content: center" src="img/servicios/serv_servicios.png" alt=""> 
                            </div>
                        </div>
                    
                       
              
                      
                    </div>
                </div>
            </div>                            
        </div>                                 
    </div>
</div>
@endsection