@extends('layouts.masterservicios')

@section('bodyservicios')

<div class="section-content" style="transform: none;">
    <div class="container" style="transform: none;">
        <div class="row" style="transform: none;">
        
            <div class="col-lg-4 col-md-12 rightSidebar" style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">
                 
                
                
            <div class="theiaStickySidebar" style="padding-top: 0px; padding-bottom: 1px; position: static; transform: none; top: 0px; left: 396.5px;"><div class="all_services">
                    <ul>
                        <ul>
                            <li><a href="{{ url('servicios') }}" >NUESTROS SERVICIOS</a></li>
                            <li><a href="{{ url('representacion') }}">REPRESENTACIÓN</a></li>
                            <li><a href="{{ url('servicioalasociado') }}">SERVICIO AL ASOCIADO</a></li> 
                            <li><a href="{{ url('serviciosjuridicos') }}">SERVICIOS JURÍDICOS</a></li>
                            <li><a href="{{ url('capacitaciones') }}"class="active">CAPACITACIONES</a></li>
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
                        <h2 class="wt-title">CAPACITACIÓNES</h2>
                    </div>
                    <!-- TITLE END -->                                
                   <div class="wt-box services-etc m-b30">
                       <p>
                        La Cámara Nacional de Industrias (CNI) cuenta con el área de capacitación que tiene por objetivo ofrecer webinars, capacitaciones programadas individuales y corporativas sobre distintos temas para la mejóra continua.
                           </p>                                   
                           <div class="wt-media m-b30">
                               <img src="img/servicios/serv_capacitacion.png" height="50%" width="50%" alt=""> 
                        </div>
                        <div class="wt-info">
                            <h3></h3>
                            <p style="text-align: justify">
                                1) WEBINARS GRATUITOS
El Webinar surge como una idea, dentro de los equipos organizadores, cuyo propósito central es generar un espacio de construcción de aprendizajes, de diálogos y de encuentros. La definición de manera clara y concreta de lo que esperábamos se produjese en el Webinar fue el punto de arranque para desencadenar una serie de decisiones (que involucran especialmente diversos aspectos pedagógicos y también tecnológicos) que dieron como resultado el dispositivo del Webinar. El Webinar como idea, por lo tanto, se concibe mucho antes que el dispositivo y en su concreción aparece la concepción de la arquitectura de la plataforma.
a) Webinars Económicos
b) Webinars Hecho en Bolivia
c) Webinars Industria 4.0
                            </p>
                            <p style="text-align: justify">
                                2) CAPACITACIONES PROGRAMADAS / INDIVIDUALES
                                Estas capacitaciones son programadas con anticipación y realizadas con expertos nacionales e internacionales. Estas capacitaciones son abierta al publico en general, pueden tener un costo o en el caso del Experto decida puede que se realicen de manera gratuita.
                                a) Reducción estratégica de costos en tiempos de contingencia
                                b) Curso costeo ABC – ABM
                                c) Metodologías prácticas para la creación de indicadores KPI
                                d) Curso gerencia de costos
                                e) Curso controller: control de gestión de la empresa
                                f) Curso KPI´s de logística para la toma de decisiones
                                g) Creación de indicadores clave de desempeño KPI”
                            </p>
                            <p style="text-align: justify">
                                3) CAPACITACIONES CORPORATIVAS
Las industrias asociadas o empresas interesadas pueden optar por contratar estas capacitaciones para su personal, realizarlas en oficinas de la CNI o en sus mismas Industrias o Empresas.
a) Administracion efectiva del tiempo
b) Calidad y excelencia en el servicio y atención al cliente
c) Comunicacion eficaz, negociacion y liderazgo
d) Gestión de cobranzas y relaciones a largo plazo con el cliente
e) Liderazgo & coaching
f) Manejo de los cambios y adaptabilidad al presente
g) Negociacion y resolucion de conflictos
h) Neuromarketing introductorio
i) Perfeccionamiento en ventas y negociacion
j) Publicidad efectiva - guia practica
k) Relaciones publicas y humanas
l) Tecnicas de negociacion y resolucion de conflictos - metodo harvard
m) Trabajo en equipo
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