@extends('layouts.masterservicios')

@section('bodyservicios')
<div class="wt-bnr-inr overlay-wraper bg-center" style="background-image:url(img/servicios/serv_asociado.png);">
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
                        <li style="color: aliceblue" >SERVICIO AL ASOCIADO</li>
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
                        <li><a href="{{ url('servicios') }}" >NUESTROS SERVICIOS</a></li>
                            <li><a href="{{ url('representacion') }}">REPRESENTACIÓN</a></li>
                            <li><a href="{{ url('servicioalasociado') }}"class="active">SERVICIO AL ASOCIADO</a></li> 
                            <li><a href="{{ url('serviciosjuridicos') }}">SERVICIOS JURÍDICOS</a></li>
                            <li><a href="{{ url('capacitaciones') }}">CAPACITACIONES</a></li>
                           <!-- <li><a href="{{ url('serviciosadicionales') }}">SERVICIOS ADICIONALES</a></li>     -->                                   
                    </ul>  
                    </div>
                    </div></div>
                
                <div class="col-lg-8 col-md-12">
                    <div class="section-content">
                        <!-- TITLE START -->
                        <div class="text-left">
                            <h2 class="wt-title">SERVICIO AL ASOCIADO</h2>
                        </div>
                        <!-- TITLE END -->                                
                        <div class="wt-box services-etc m-b30">                               
                                <div class="wt-media m-b30">
                                    <img src="img/servicios/serv_asociado.png" height="50%" width="50%" alt=""> 
                                </div>
                                
                            </div>
                    
                       
                        
                       <div>
                               <h2>Contamos con los siguientes servicios</h2>
                            <div class="wt-accordion acc-bg-gray" id="accordion5">
                                <div class="panel wt-panel">
                                    <div class="acod-head acc-actives">
                                         <h4 class="acod-title">
                                            <a data-toggle="collapse" href="#collapseOne5" data-parent="#accordion5" aria-expanded="false">
                                               ASESORAMIENTO<span class="indicator"><i class="fa fa-plus"></i></span>
                                            </a>
                                         </h4>
                                    </div>
                                    <div id="collapseOne5" class="acod-body collapse bg-gray">
                                        <div class="acod-content p-a15">
                                            <h4>SYSO Y MEDIO AMBIENTE</h4>
                                            <p style="text-align: justify">
                                                •	Conformación de Comité Mixto de Higiene Seguridad Ocupacional y Bienestar <br>
                                                •	Eficiencia energética y prevención de la contaminación en Industrias <br>
                                                •	Gestión de residuos sólidos de la industria <br>
                                                •	Asesoramiento en Producción Más Limpia y Buenas Prácticas de Manufactura <br> <br>
                                            </p>
                                            
                                            
                                            <h4>SERVICIOS INDUSTRIALES</h4>

                                            <p style="text-align: justify">
                                                •	Procesos Industriales <br>
                                                •	Manejo de Almacenes <br>
                                                •	Cadena de Suministros <br>
                                                •	Uso y manejo de extintores <br>
                                                •	Uso de Equipos de Protección Personal <br>
                                                •	Análisis y prevención de riesgos laborales <br>
                                                •	Gestión en el manejo de salvaguardas, protecciones y emergencias <br>
                                                •	Simulacros de Evacuación y Lucha contra Incendios <br><br>
                                            </p>
                                           
                                            
                                            <h4>COMERCIO EXTERIOR</h4>	

                                            <p style="text-align: justify">
                                                Explicación, aclaración y análisis de las normas comerciales relativas a los procedimientos de importación y exportación, normativa aduanera y arancelaria y de acuerdos comerciales suscritos por Bolivia, así como de la normativa multilateral, restricciones arancelarias, normas de origen y otros. <br>
                                            </p>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="panel wt-panel">
                                    <div class="acod-head">
                                         <h4 class="acod-title">
                                            <a data-toggle="collapse" href="#collapseTwo5" class="" data-parent="#accordion5" aria-expanded="false">
                                           ASISTENCIA TÉCNICA<span class="indicator"><i class="fa fa-plus"></i></span>
                                            </a>
                                         </h4>
                                    </div>
                                    <div id="collapseTwo5" class="acod-body bg-gray collapse" style="">
                                        <div class="acod-content p-a15">
                                            <h4>ELABORACIÓN DE DOCUMENTOS AMBIENTALESL</h4>
                                            <p style="text-align: justify">
                                                •	Elaboración, Actualización y Renovación de Registro Ambiental (RAI) <br>
                                                •	Elaboración de un Estudio de Evaluación de Impacto Ambiental (EEIA) y Plan de Manejo Ambiental (PMA) <br>
                                                •	Elaboración de la Descripción del Proyecto (DP) y Manifiesto Ambiental Industrial (MAI) <br>
                                                •	Elaboración del Manifiesto Ambiental Industrial (MAI) y Plan de Manejo Ambiental (PMA) <br>
                                                •	Elaboración de Informe Ambiental Anual (IAA) <br>
                                                •	Elaboración de Protocolos de Bioseguridad <br>
                                                •	Elaboración de Programas de Seguridad y Salud en el Trabajo (PSST) <br>
                                            </p>
                                            <h4>ESTUDIOS Y MONITOREO DE SEGURIDAD INDUSTRIAL Y MEDIO AMBIENTE</h4>
                                            <p style="text-align: justify">
                                                •	Estudio de Niveles de Ruido Industrial <br> 
                                                •	Estudio de Niveles de Ruido Ambiental <br>
                                                •	Estudio de Estrés Térmico <br>
                                                •	Estudio de Intensidad Lumínica <br>
                                                •	Monitoreo y caracterización de residuos sólidos <br>

                                            </p>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="panel wt-panel">
                                    <div class="acod-head">
                                        <h4 class="acod-title">
                                        <a data-toggle="collapse" href="#collapseThree5" class="collapsed" data-parent="#accordion5" aria-expanded="false">
                                        SERVICIOS EN ALIANZA CON TERCEROS<span class="indicator"><i class="fa fa-plus"></i></span>
                                        </a>
                                     </h4>
                                    </div>
                                     <!--  <div id="collapseThree5" class="acod-body collapse show bg-gray">    ***show = para mostrar completo y no reducido***  -->
                                    <div id="collapseThree5" class="acod-body collapse bg-gray">
                                        <div class="acod-content p-a15">
                                            <p style="text-align: justify">
                                                •	Monitoreo de Gases NOX, SOX <br>
                                                •	Monitoreo de Partículas Suspendidas Totales (PST) <br>
                                                •	Monitoreo de PM10 <br>
                                                •	Medición de Conductividad de Agua <br>                                             
                                            </p>
                                             <h4>PROCESOS INDUSTRIALES</h4>
                                            <p style="text-align: justify">
                                                •	Diseño de Procesos <br>
                                                •	Reingeniería de Procesos <br>
                                                •	Documentación y Diagramación de Procesos <br>
                                            </p>
                                            <h4>OPTIMIZACIÓN Y CONTROL</h4>
                                            <p style="text-align: justify">
                                                •	Control Total de Calidad <br>
                                                •	Muestreo Estadístico <br>
                                                •	Control Estadístico de la Calidad <br>
                                                •	Enfoque Sistémico <br>
                                            </p>
                                            
                                        </div>
                                    </div>
                                </div>

                                <div class="panel wt-panel">
                                    <div class="acod-head">
                                        <h4 class="acod-title">
                                        <a data-toggle="collapse" href="#collapseFour5" class="collapsed" data-parent="#accordion5" aria-expanded="false">
                                            UNIDAD DE SERVICIOS ADUANEROS<span class="indicator"><i class="fa fa-plus"></i></span>
                                        </a>
                                     </h4>
                                    </div>
                                     <!--  <div id="collapseThree5" class="acod-body collapse show bg-gray">    ***show = para mostrar completo y no reducido***  -->
                                    <div id="collapseFour5" class="acod-body collapse bg-gray">
                                        <div class="acod-content p-a15">

                                                <h4>SERVICIOS EN PUERTO ARICA - CHILE</h4>
                                                <p style="text-align: justify">
                                                    •	Notificación vía correo electrónico de traques de naves, planificación de faenas y despacho de mercancías hacia Bolivia <br>
                                                    •	Coordinación del tránsito de mercancías hacia y desde Bolivia, con aduana nacional, administración de servicios portuarios Bolivia (ASPB), terminal puerto Arica (TPA) <br>                                        
                                                </p>
                                               
                                                <h4>SERVICIOS EN RECINTOS ADUANEROS</h4>
                                                <p style="text-align: justify">
                                                    •	Notificación vía correo electrónico del ingreso, ubicación, emisión de parte de recepción y salida de mercancías. <br>
                                                    •	Seguimiento y verificación de la recepción, pesaje y ubicación de mercancías en los almacenes del concesionario aduanero <br>
                                                    •	Apoyo y participación en exámenes previos y reconocimiento de mercancías en conjunto con los funcionarios de aduana y del concesionario de depósito <br>
                                                    •	Seguimiento y verificación efectiva de la salida de mercancías de los almacenes del concesionario de depósito de aduana <br>
                                                    •	Oficinas equipadas con equipos de computación, scanner, fotocopiadoras, internet y wi fi.             <br>                        
                                                </p>
                                                
                                                <h4>SERVICIOS DE ASESORAMIENTO EN:</h4>
                                                <p style="text-align: justify">
                                                    •	Procedimientos aduaneros de importación y exportación <br>
                                                    •	Clasificación arancelaria <br>
                                                    •	Incoterms <br>
                                                    •	Operaciones portuarias <br>
                                                    •	Logística marítimo-terrestre       <br>                               
                                                </p>
                                               
                                                <h4>REPRESENTACIÓN INSTITUCIONAL:</h4>
                                                <p style="text-align: justify">
                                                    •	Ante autoridades gubernamentales y operadores de comercio exterior, operadores logísticos y de servicios concesionarios de depósitos aduaneros                                       
                                                </p>
                                                  
                                        </div>
                                    </div>
                                </div>

                                <div class="panel wt-panel">
                                    <div class="acod-head">
                                        <h4 class="acod-title">
                                        <a data-toggle="collapse" href="#collapseFive5" class="collapsed" data-parent="#accordion5" aria-expanded="false">
                                            CAPACITACIÓN<span class="indicator"><i class="fa fa-plus"></i></span>
                                        </a>
                                     </h4>
                                    </div>
                                     <!--  <div id="collapseThree5" class="acod-body collapse show bg-gray">    ***show = para mostrar completo y no reducido***  -->
                                    <div id="collapseFive5" class="acod-body collapse bg-gray">
                                        <div class="acod-content p-a15">

                                                <h4>1)	WEBINARS GRATUITOS</h4>
                                                <p style="text-align: justify">
                                                    El Webinar surge como una idea, dentro de los equipos organizadores, cuyo propósito central es generar un espacio de construcción de aprendizajes, de diálogos y de encuentros. La definición de manera clara y concreta de lo que esperábamos se produjese en el Webinar fue el punto de arranque para desencadenar una serie de decisiones (que involucran especialmente diversos aspectos pedagógicos y también tecnológicos) que dieron como resultado el dispositivo del Webinar. El Webinar como idea, por lo tanto, se concibe mucho antes que el dispositivo y en su concreción aparece la concepción de la arquitectura de la plataforma. <br>
                                                    a)	Webinars Económicos <br>
                                                    b)	Webinars Hecho en Bolivia <br>
                                                    c)	Webinars Industria 4.0 <br>
                                                    
                                                </p>
                                               
                                                <h4>2)	CAPACITACIONES PROGRAMADAS / INDIVIDUALES</h4>
                                                <p style="text-align: justify">
                                                    Estas capacitaciones son programadas con anticipación y realizadas con expertos nacionales e internacionales. Estas capacitaciones son abierta al publico en general, pueden tener un costo o en el caso del Experto decida puede que se realicen de manera gratuita. <br>
                                                    a)	Reducción estratégica de costos en tiempos de contingencia <br>
                                                    b)	Curso costeo ABC – ABM <br>
                                                    c)	Metodologías prácticas para la creación de indicadores KPI <br>
                                                    d)	Curso gerencia de costos <br>
                                                    e)	Curso controller: control de gestión de la empresa <br>
                                                    f)	Curso KPI´s de logística para la toma de decisiones <br>
                                                    g)	Creación de indicadores clave de desempeño KPI” <br>
                                                    
                                                </p>
                                               
                                                <h4>3)	CAPACITACIONES CORPORATIVAS</h4>
                                                <p style="text-align: justify">
                                                    Las industrias asociadas o empresas interesadas pueden optar por contratar estas capacitaciones para su personal, realizarlas en oficinas de la CNI o en sus mismas Industrias o Empresas. <br>
                                                    a)	Administracion efectiva del tiempo <br>
                                                    b)	Calidad y excelencia en el servicio y atención al cliente <br>
                                                    c)	Comunicacion eficaz, negociacion y liderazgo <br>
                                                    d)	Gestión de cobranzas y relaciones a largo plazo con el cliente <br>
                                                    e)	Liderazgo & coaching <br>
                                                    f)	Manejo de los cambios y adaptabilidad al presente <br>
                                                    g)	Negociacion y resolucion de conflictos <br>
                                                    h)	Neuromarketing introductorio <br>
                                                    i)	Perfeccionamiento en ventas y negociacion <br>
                                                    j)	Publicidad efectiva - guia practica <br>
                                                    k)	Relaciones publicas y humanas <br>
                                                    l)	Tecnicas de negociacion y resolucion de conflictos - metodo harvard <br>
                                                    m)	Trabajo en equipo <br>
                                                    
                                                </p>
                                              
                                               
                                                  
                                        </div>
                                    </div>
                                </div>
                            </div>                                   
                       </div> 
                      
                    </div>
                </div>
            </div>                            
        </div>                                 
    </div>
</div>

@endsection