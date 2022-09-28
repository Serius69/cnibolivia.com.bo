@extends('layouts.masterservicios')

@section('bodyservicios')
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
                        <li style="color: aliceblue" >SERVICIOS JURÍDICOS</li>
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
                            <li><a href="{{ url('servicioalasociado') }}">SERVICIO AL ASOCIADO</a></li> 
                            <li><a href="{{ url('serviciosjuridicos') }}"class="active">SERVICIOS JURÍDICOS</a></li>
                            <li><a href="{{ url('capacitaciones') }}">CAPACITACIONES</a></li>
                           <!-- <li><a href="{{ url('serviciosadicionales') }}">SERVICIOS ADICIONALES</a></li>     -->                                 
                    </ul>  
                    </div>
                    </div></div>
                
                <div class="col-lg-8 col-md-12">
                    <div class="section-content">
                        <!-- TITLE START -->
                        <div class="text-left">
                            <h2 class="wt-title">SERVICIOS JURIDICOS</h2>
                        </div>
                        <!-- TITLE END -->                                
                        <div class="wt-box services-etc m-b30">                               
                                <div class="wt-media m-b30">
                                    <img src="img/servicios/serv_juridicos.png" height="50%" width="50%" alt=""> 
                                </div>
                                
                            </div>
                    
                       
                        
                       <div>
                               <h4>Contamos con los siguientes servicios   </h4>
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
                                          
                                            <p style="text-align: justify">
                                                •	Constitucional <br>
                                                •	Civil <br>
                                                •	Comercial <br>
                                                •	Tributario <br>
                                                •	Ambiental <br>
                                                •	Aduanero <br>
                                                •	Laboral y Seguridad Social <br>
                                                •	Seguridad y Salud Ocupacional <br>
                                                •	Administrativo <br>
                                                •	Sustancias Controladas     <br>                                            
                                            </p>
                                            
                                            
                                            <h4>INFORMACIÓN NORMATIVA</h4>

                                            <p style="text-align: justify">
                                                Con la finalidad de mantener a sus asociados informados con la normativa emitida a nivel municipal, departamental y nacional en determinados ámbitos de aplicación, la CNI remite a sus asociados a través de correo electrónico, la siguiente información: <br>
                                                •	Reporte Semanal denominado “Alerta Jurídica” a través del cual se informa sobre la norma emitida, de forma continua, dinámica y sintetizada <br>
                                                <br>
                                                La alerta jurídica consiste en una sistematización de la clasificación de normas, en función al tipo de norma, fuente, ámbito regulatorio y otras características, y contiene un breve análisis de las normas reportadas, en el cual se identifican las obligaciones y formalidades, así como las consecuencias de incumplir dicha normativa y los plazos establecidos para hacer efectivos dichos cumplimientos, en los ámbitos que sean expresamente de interés de los miembros de la CNI <br>
                                                •	Un reporte trimestral, mediante el cual se comunica todas las leyes y decretos supremos publicados por la gaceta oficial del Estado Plurinacional de Bolivia. <br>
                                                •	Circulares que contienen un análisis legal sobre ciertas normas que son de interés para el sector industrial <br>
                                                
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
                                            <h4>AUDITORÍA LEGAL</h4>
                                            <p style="text-align: justify">
                                                •	Realización de una revisión enfocada a ciertos registros corporativos de la empresa, para identificar el cumplimiento de la normativa formal y que de esta manera las áreas correspondientes puedan implementar mecanismos de control para el oportuno y adecuado cumplimiento de formalidades y obligaciones normativas <br>
                                                La revisión se efectúa en los siguientes ámbitos: <br>
                                                •	Comercial <br>
                                                •	Laboral y provisional  <br>
                                                •	Tributario y contable formal <br>
                                                •	Medio ambiental <br>
                                                •	Sustancias controladas <br>
                                                Una vez concluida la revisión correspondiente, se elabora un informe que contiene: <br>
                                                •	La descripción de procedimientos realizados <br>
                                                •	Los resultados de la aplicación de los mismos <br> <br>
                                                •	Subsanación de las observaciones identificadas en la auditoría legal <br>

                                            </p>
                                            <h4>ESTUDIOS Y MONITOREO DE SEGURIDAD INDUSTRIAL Y MEDIO AMBIENTE</h4>
                                            <p style="text-align: justify">
                                                •	Estudio de Niveles de Ruido Industrial <br> 
                                                •	Estudio de Niveles de Ruido Ambiental <br>
                                                •	Estudio de Estrés Térmico <br>
                                                •	Estudio de Intensidad Lumínica <br>
                                                •	Monitoreo y caracterización de residuos sólidos <br>

                                            </p>

                                            <h4>ASISTENCIA TÉCNICA-LEGAL PARA LA ELABORACIÓN O ADECUACIÓN DE DOCUMENTOS</h4>

                                            <p style="text-align: justify">
                                                •	Elaboración o adecuación de documentos jurídico-comerciales de la empresa, de acuerdo con lo establecido en la normativa vigente
                                                •	Elaboración de contratos o modelos de contratos
                                                •	Elaboración de finiquitos
                                                •	Protocolización de contratos y poderes ante notarias de fe publica
                                            </p>

                                            <h4>CONSTITUCIÓN, MODIFICACIÓN, LIQUIDACIÓN DE SOCIEDADES COMERCIALES O CIVILES</h4>
                                            <p style="text-align: justify">
                                                •	Constitución de sociedad comercial, hasta la obtención de la matrícula de comercio respectiva
                                                •	Constitución de sociedades civiles
                                                •	Constitución de asociaciones o entidades sin fines de lucro. Hasta la obtención de la resolución de otorgación o reconocimiento de personería jurídica
                                                •	Modificación de escrituras de constitución, transferencias de acciones, cuotas de capital y otros
                                                •	Liquidación de sociedad comercial y consiguiente cancelación de matrícula de comercio
                                                •	Apertura o cierre de sucursales
                                                •	Otros
                                            </p>
                                            <h4>TRÁMITES ANTE EL SERVICIO NACIONAL DE PROPIEDAD INTELECTUAL (SENAPI)</h4>
                                            <p style="text-align: justify">
                                                •	Registro de:
                                                •	Marcas
                                                •	Lemas comerciales
                                                •	Nombres comerciales
                                                •	Signos distintivos
                                                •	Derechos de autor y derechos conexos
                                                •	Patente
                                                •	Renovación de marca
                                                •	Cambios operativos y modificaciones
                                                •	Transferencia de marca
                                                •	Defensa de derechos
                                                •	Presentación de demandas de oposición
                                                •	Otros
                                            </p>
                                            <h4>SERVICIO DE REGULARIZACIÓN DE INMUEBLES</h4>
                                            <p style="text-align: justify">
                                                •	Ante el GOBIERNO AUTONOMO MUNICIPAL DE LA PAZ, tramitación de: <br>
                                                •	Modificaciones de datos generales de contribuyentes y de las características técnicas del bien inmueble registrado en el padrón municipal del contribuyente <br>
                                                •	Informe técnico predial <br>
                                                •	Baja de inmueble por doble registro y regulación de impuesto tributario <br>
                                                •	Regulación de derecho propietario por sucesión hereditaria <br> <br>
                                                •	Ante las OFICINAS DE DERECHOS REALES, tramitación de: <br>
                                                •	Compra-venta <br>
                                                •	Aclaración de ubicación y/o superficie (Cambio de jurisdicción) <br>
                                                •	Matriculación (Cambio de tarjeta computarizada a folio real) <br>
                                                •	Certificado de no propiedad <br>
                                                •	Información rápida, certificado treintenal, certificado de tradición de propiedad <br>
                                                •	Tramitación de la regularización del DERECHO PROPIETARIO ante DERECHOS REALES y el GOBIERNO AUTONOMO MUNICIPAL DE LA PAZ, incluyendo: <br>
                                                •	Sub inscripción de corrección de datos técnicos <br>
                                                •	Sub inscripción de corrección de datos de identidad <br>
                                                •	Tramitación de procesos judiciales de regulación del derecho propietario, incluyendo <br>
                                                •	Regulación individual de propiedad privada <br>
                                                •	Declaratoria de herederos <br>
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