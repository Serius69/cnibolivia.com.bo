@extends('layouts.masterservicios')

@section('bodyservicios')

<div class="wt-bnr-inr overlay-wraper bg-center" style="background-image:url(img/servicios/serv_representacion.png);">
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
                        <li><a href="servicios">SERVICIOS</a></li>
                        <li style="color: aliceblue" >REPRESENTACIÓN</li>
                    </ul>
                </div>
            
            <!-- BREADCRUMB ROW END -->                        
        </div>
    </div>
</div>

<div class="section-content" style="transform: none;">
    <div class="container" style="transform: none;">
        <div class="row" style="transform: none;">
        
            <div class="col-lg-4 col-md-12 rightSidebar" style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">
                 
                
                
            <div class="theiaStickySidebar" style="padding-top: 0px; padding-bottom: 1px; position: static; transform: none; top: 0px; left: 396.5px;"><div class="all_services">
                    <ul>
                        <ul>
                            <li><a href="{{ url('servicios') }}" >NUESTROS SERVICIOS</a></li>
                            <li><a href="{{ url('representacion') }}"class="active">REPRESENTACIÓN</a></li>
                            <li><a href="{{ url('servicioalasociado') }}">SERVICIO AL ASOCIADO</a></li> 
                            <li><a href="{{ url('serviciosjuridicos') }}">SERVICIOS JURÍDICOS</a></li>
                            <li><a href="{{ url('capacitaciones') }}">CAPACITACIONES</a></li>
                           <!-- <li><a href="{{ url('serviciosadicionales') }}">SERVICIOS ADICIONALES</a></li>     -->                              
                        </ul>                                      
                    </ul>
                </div>
               
            </div>
        </div>
            
            <div class="col-lg-8 col-md-12">
                <div class="section-content">
                    <!-- TITLE START -->
                    <div class="text-left">
                        <h2 class="wt-title">REPRESENTACIÓN</h2>
                    </div>
                    <!-- TITLE END -->                                
                   <div class="wt-box services-etc m-b30">
                       <p style="text-align: justify">
                        La Cámara Nacional de Industrias (CNI) es un ente de coordinación sin fines de lucro legalmente reconocida, que representa a sus afiliados ante instancias públicas y privadas, municipales, nacionales e internacionales, con la finalidad de promocionar la industria nacional y defender sus intereses legítimos.
                           </p>                                   
                           <div class="wt-media m-b30 ">
                               <img src="img/servicios/serv_representacion.png" height="50%" width="50%" alt=""> 
                        </div>
                        <div class="wt-info">
                            <p style="text-align: justify">
                                La CNI dispone de personal calificado y de los instrumentos idóneos para realizar sus actividades orientadas al desarrollo productivo manufacturero y empresarial del país
                            </p>
                            <p style="text-align: justify">
                                La CNI interactúa y mantiene relaciones con diferentes actores económico-empresariales públicos y privados, desarrolla y difunde análisis y valoraciones sobre ámbitos de su competencia, participa en la revisión de proyectos normativos, propone normas de interés para el sector industrial y colabora en iniciativas de interés para la promoción y el impulso de la industria nacional.
                            </p>
                            <p style="text-align: justify">
                                Bajo esos lineamientos, la CNI defiende los intereses de sus afiliados en lo que se refiere a legislación y normativa que puedan afectar al tejido industrial, promueve la actividad productiva a través de la identificación de programas que beneficien a sus afiliados, y realiza actividades de coordinación y cabildeo.
                            </p>
                            <p style="text-align: justify">
                                La representación de la CNI se sustenta en el permanente apoyo y respaldo de sus asociados, el contacto directo y permanente con las empresas industriales de diversos sectores, lo que configura una sólida fuente de información de manera oportuna y eficiente y renovar y fortalecer constantemente su capacidad de respuesta.
                            </p>
                                                                   
                        </div>
                    </div>
                   <div>
                                                      
                   </div> 
                  
                </div>
            </div>
        </div>                            
    </div>                                 
</div>

@endsection