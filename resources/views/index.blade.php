@extends('layouts.master')

@section('body')
    <!-- CONTENT START -->
    <div class="page-content">

        <!-- SLIDER START -->
        <div class="slider-outer">

            <div class="main-slider style-two default-banner">
                <div class="tp-banner-container">
                    <div class="tp-banner" >
                        <!-- START REVOLUTION SLIDER 5.4.1 -->
                        <div id="rev_slider_26_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="mask-showcase" data-source="gallery" style="background:#aaaaaa;padding:0px;">

                            <div id="rev_slider_26_1" class="rev_slider fullscreenbanner tiny_bullet_slider" style="display:none;" data-version="5.4.1">
                                <ul>                                  

                                    @foreach ($banners as $banner)
                                    {{-- @if (($banner->id)==1 || ($banner->id)==2 || ($banner->id)==3) --}}
                                    <!-- SLIDE 2 -->
                                    <li data-index="rs-{{$banner->id}}" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300"  data-thumb=""  data-rotate="0"  data-saveperformance="off"  data-title="Slide">

                                        <!-- MAIN IMAGE -->
                                        <img src="{{ url('img/banners_inicio/'.$banner->path2) }}" alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg">
                                        <!-- LAYERS -->

                                        <!-- LAYER 1 [ for overlay ] -->
                                        <div class="tp-caption tp-shape tp-shapewrapper "
                                            id="slide-74-layer-1"
                                            data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                            data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                                            data-width="full"
                                            data-height="full"
                                            data-whitespace="nowrap"
                                            data-type="shape"
                                            data-basealign="slide"
                                            data-responsive_offset="off"
                                            data-responsive="off"
                                            data-frames='[
                                            {"from":"opacity:0;","speed":1000,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},
                                            {"delay":"wait","speed":1000,"to":"opacity:0;","ease":"Power4.easeOut"}
                                            ]'
                                            data-textAlign="['left','left','left','left']"
                                            data-paddingtop="[0,0,0,0]"
                                            data-paddingright="[0,0,0,0]"
                                            data-paddingbottom="[0,0,0,0]"
                                            data-paddingleft="[0,0,0,0]"

                                            style="z-index:2;background-color:rgba(0, 0, 0, 0.5);border-color:rgba(0, 0, 0, 0);border-width:0px;">
                                        </div>



                                        <!-- LAYER NR. 3 -->
                                        <div class="tp-caption   tp-resizeme"
                                            id="slide-74-layer-3"
                                            data-x="['left','left','center','center']" data-hoffset="['0','0','0','0']"
                                            data-y="['middle','middle','middle','middle']" data-voffset="['0','0','-100','-120']"
                                            data-fontsize="['100','100','60','40']"
                                            data-lineheight="['100','100','60','40']"
                                            data-width="['700','650','620','380']"
                                            data-height="none"
                                            data-whitespace="normal"

                                            data-type="text"
                                            data-responsive_offset="on"

                                            data-frames='[{"delay":200,"speed":750,"sfxcolor":"#ddd","sfx_effect":"blockfromleft","frame":"0","from":"z:0;","to":"o:1;","ease":"Power3.easeInOut"},
                                            {"delay":"wait","speed":500,"sfxcolor":"#ffffff","sfx_effect":"blocktoleft","frame":"999","to":"z:0;","ease":"Power4.easeOut"}]'
                                            data-textAlign="['left','left','center','center']"
                                            data-paddingtop="[20,20,20,20]"
                                            data-paddingright="[20,20,20,20]"
                                            data-paddingbottom="[30,30,30,30]"
                                            data-paddingleft="[20,20,20,20]"

                                            style="z-index: 8; font-weight: 800; color: #ffffff; font-family: 'Teko', sans-serif;">
                                            <a style="top: 50px; font-size:80px ; color: #ffffff; top: -100px ;">{{ $banner->title }}</a>
                                            <p style="font-size: 30px">{{ $banner->subtitle }}</p>
                                        </div>

                                        <!-- LAYER NR. 4 -->
                                        <a href="{{ $banner->url }}">

                                            <div class="tp-caption rev-btn  tp-resizeme"
                                            id="slide-74-layer-4"
                                            data-x="['left','left','center','center']" data-hoffset="['25','0','0','0']"
                                            data-y="['middle','middle','middle','middle']" data-voffset="['150','150','50','-30']"
                                            data-width="none"
                                            data-height="none"
                                            data-whitespace=""

                                            data-type="button"
                                            data-responsive_offset="on"

                                            data-frames='[{"delay":500,"speed":1000,"sfxcolor":"#ddd","sfx_effect":"blockfromleft","frame":"0","from":"z:0;","to":"o:1;","ease":"Power3.easeInOut"},
                                            {"delay":"wait","speed":500,"sfxcolor":"#ffffff","sfx_effect":"blocktoleft","frame":"999","to":"z:0;","ease":"Power4.easeOut"},
                                            {"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgb(0,0,0);bg:rgb(255,255,255);"}]'
                                            data-textAlign="['inherit','inherit','inherit','inherit']"
                                            data-paddingtop="[0,0,0,0]"
                                            data-paddingright="[30,30,30,30]"
                                            data-paddingbottom="[0,0,0,0]"
                                            data-paddingleft="[30,30,30,30]"

                                            style="z-index: 10; font-size: 18px; line-height: 50px; font-weight: 400; color: rgba(255,255,255,1);
                                            letter-spacing: 2px;font-family: 'Poppins', sans-serif; border-color:rgb(255,255,255);
                                            border-style:solid;border-width:1px 1px 1px 1px;outline:none;box-shadow:none;
                                            box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">URL

                                        </div>
                                        </a>


                                        <!-- LAYER NR. 5 -->
                                        <div class="tp-caption   tp-resizeme rs-parallaxlevel-2"
                                            id="slide-74-layer-5"
                                            data-x="['center','center','center','center']" data-hoffset="['500','500','0','0']"
                                            data-y="['middle','middle','bottom','bottom']" data-voffset="['0','0','50','50']"
                                            data-width="none"
                                            data-height="none"
                                            data-whitespace="nowrap"

                                            data-type="image"
                                            data-responsive_offset="on"

                                            data-frames='[{"delay":400,"speed":750,"sfxcolor":"#000","sfx_effect":"blockfromleft","frame":"0","from":"z:0;","to":"o:1;","ease":"Power3.easeInOut"},
                                            {"delay":"wait","speed":500,"sfxcolor":"#ffffff","sfx_effect":"blocktoleft","frame":"999","to":"z:0;","ease":"Power4.easeOut"}]'
                                            data-textAlign="['inherit','inherit','inherit','inherit']"
                                            data-paddingtop="[0,0,0,0]"
                                            data-paddingright="[0,0,0,0]"
                                            data-paddingbottom="[0,0,0,0]"
                                            data-paddingleft="[0,0,0,0]"

                                            style="z-index: 6;">
                                            <img src="{{ url('img/banners_inicio/'.$banner->path1) }}" alt="" data-ww="['1000px','1000px','800px','500px']" data-hh="['480px','480px','450','281']" width="1200" height="675" data-no-retina>
                                        </div>


                                    </li>
                                    {{-- @endif --}}

                                    @endforeach
                                    {{-- <!-- SLIDE 3 -->
                                    <li data-index="rs-75" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300"  data-thumb=""  data-rotate="0"  data-saveperformance="off"  data-title="Slide">
                                        <!-- MAIN IMAGE -->
                                        <img src="{{ url('img/banners_inicio/nuevoroldelcfo(b).jpeg') }}" alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg">
                                        <!-- LAYERS -->
                                        <!-- LAYER 1 [ for overlay ] -->
                                        <div class="tp-caption tp-shape tp-shapewrapper "
                                            id="slide-75-layer-1"
                                            data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                            data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                                            data-width="full"
                                            data-height="full"
                                            data-whitespace="nowrap"
                                            data-type="shape"
                                            data-basealign="slide"
                                            data-responsive_offset="off"
                                            data-responsive="off"
                                            data-frames='[
                                            {"from":"opacity:0;","speed":1000,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},
                                            {"delay":"wait","speed":1000,"to":"opacity:0;","ease":"Power4.easeOut"}
                                            ]'
                                            data-textAlign="['left','left','left','left']"
                                            data-paddingtop="[0,0,0,0]"
                                            data-paddingright="[0,0,0,0]"
                                            data-paddingbottom="[0,0,0,0]"
                                            data-paddingleft="[0,0,0,0]"
                                            style="z-index:2;background-color:rgba(0, 0, 0, 0.5);border-color:rgba(0, 0, 0, 0);border-width:0px;">
                                        </div>
                                        <!-- LAYER NR. 3 -->
                                        <div class="tp-caption   tp-resizeme"
                                            id="slide-75-layer-3"
                                            data-x="['left','left','center','center']" data-hoffset="['0','0','0','0']"
                                            data-y="['middle','middle','middle','middle']" data-voffset="['0','0','-100','-120']"
                                            data-fontsize="['100','100','60','40']"
                                            data-lineheight="['100','100','60','40']"
                                            data-width="['700','650','620','380']"
                                            data-height="none"
                                            data-whitespace="normal"
                                            data-type="text"
                                            data-responsive_offset="on"
                                            data-frames='[{"delay":200,"speed":750,"sfxcolor":"#ddd","sfx_effect":"blockfromleft","frame":"0","from":"z:0;","to":"o:1;","ease":"Power3.easeInOut"},
                                            {"delay":"wait","speed":500,"sfxcolor":"#ffffff","sfx_effect":"blocktoleft","frame":"999","to":"z:0;","ease":"Power4.easeOut"}]'
                                            data-textAlign="['left','left','center','center']"
                                            data-paddingtop="[20,20,20,20]"
                                            data-paddingright="[20,20,20,20]"
                                            data-paddingbottom="[30,30,30,30]"
                                            data-paddingleft="[20,20,20,20]"
                                            style="z-index: 8; font-weight: 800; color: #ffffff; font-family: 'Teko', sans-serif;">
                                            <a style="top: 50px; font-size:80px ; color: #ffffff; top: -100px ;">WEBINAR</a>
                                            <p style="font-size: 30px">NUEVO ROL DEL CFO</p>
                                        </div>
                                        <!-- LAYER NR. 4 -->
                                        <a href="https://forms.gle/optU4fAxRwSLSmcx9" target="_blank">
                                            <div class="tp-caption rev-btn  tp-resizeme"
                                            id="slide-75-layer-4"
                                            data-x="['left','left','center','center']" data-hoffset="['25','0','0','0']"
                                            data-y="['middle','middle','middle','middle']" data-voffset="['150','150','50','-30']"
                                            data-width="none"
                                            data-height="none"
                                            data-whitespace=""
                                            data-type="button"
                                            data-responsive_offset="on"
                                            data-frames='[{"delay":500,"speed":1000,"sfxcolor":"#ddd","sfx_effect":"blockfromleft","frame":"0","from":"z:0;","to":"o:1;","ease":"Power3.easeInOut"},
                                            {"delay":"wait","speed":500,"sfxcolor":"#ffffff","sfx_effect":"blocktoleft","frame":"999","to":"z:0;","ease":"Power4.easeOut"},
                                            {"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgb(0,0,0);bg:rgb(255,255,255);"}]'
                                            data-textAlign="['inherit','inherit','inherit','inherit']"
                                            data-paddingtop="[0,0,0,0]"
                                            data-paddingright="[30,30,30,30]"
                                            data-paddingbottom="[0,0,0,0]"
                                            data-paddingleft="[30,30,30,30]"
                                            style="z-index: 10; font-size: 18px; line-height: 50px; font-weight: 400; color: rgba(255,255,255,1);
                                            letter-spacing: 2px;font-family: 'Poppins', sans-serif; border-color:rgb(255,255,255);
                                            border-style:solid;border-width:1px 1px 1px 1px;outline:none;box-shadow:none;
                                            box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">Regístrate
                                        </div>
                                        </a>
                                        <!-- LAYER NR. 5 -->
                                        <div class="tp-caption   tp-resizeme rs-parallaxlevel-2"
                                            id="slide-75-layer-5"
                                            data-x="['center','center','center','center']" data-hoffset="['500','500','0','0']"
                                            data-y="['middle','middle','bottom','bottom']" data-voffset="['0','0','50','50']"
                                            data-width="none"
                                            data-height="none"
                                            data-whitespace="nowrap"
                                            data-type="image"
                                            data-responsive_offset="on"
                                            data-frames='[{"delay":400,"speed":750,"sfxcolor":"#000","sfx_effect":"blockfromleft","frame":"0","from":"z:0;","to":"o:1;","ease":"Power3.easeInOut"},
                                            {"delay":"wait","speed":500,"sfxcolor":"#ffffff","sfx_effect":"blocktoleft","frame":"999","to":"z:0;","ease":"Power4.easeOut"}]'
                                            data-textAlign="['inherit','inherit','inherit','inherit']"
                                            data-paddingtop="[0,0,0,0]"
                                            data-paddingright="[0,0,0,0]"
                                            data-paddingbottom="[0,0,0,0]"
                                            data-paddingleft="[0,0,0,0]"
                                            style="z-index: 6;">
                                            <img src="{{ url('img/banners_inicio/nuevoroldelcfo(f).png') }}" alt="" data-ww="['1000px','1000px','800px','500px']" data-hh="['480px','480px','450','281']" width="1200" height="675" data-no-retina>
                                        </div>
                                    </li>   --}}

                                </ul>
                                <div class="tp-bannertimer" style="height: 10px; background: rgba(0, 0, 0, 0.15);"></div>
                            </div>

                        </div>
                </div>
                </div>
            </div>

        </div>
        <!-- SLIDER END -->

        {{-- LAST LATESTS START --}}
        <div class="section-full  p-t80 p-b50 bg-white ">
            <div class="container">
    
                <!-- BLOG SECTION START -->
                <div class="section-content">
                    <div class="row d-flex justify-content-center">
                        <!--Block one-->
                        @foreach ($latests as $latest)
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="blog-post date-style-2">
                                    <div class="wt-post-media wt-img-effect zoom-slow">
                                        {{-- image --}}
                                        {{-- src="{{ url('img/banners_inicio/'.$banner->path2) }}" --}}
                                        <a href="{{ route('noticia.show',$latest->id) }}"><img src="{{ url('img/noticias/'.$latest->path) }}" alt=""></a>
                                    </div>
                                    <div class="wt-post-info bg-white p-t30">
                                        <div class="wt-post-meta ">
                                            <ul>
                                                <li class="post-category"><span>{{ $latest->type->type }}</span> </li>
                                                <li class="post-date">
                                                    <?php $mes = date('m', strtotime($latest->date_publication)); ?>
                                                    @if ($mes == '01')
                                                        Enero
                                                    @elseif($mes == '02')
                                                        Febrero
                                                    @elseif($mes == '03')
                                                        Marzo
                                                    @elseif($mes == '04')
                                                        Abril
                                                    @elseif($mes == '05')
                                                        Mayo
                                                    @elseif($mes == '06')
                                                        Junio
                                                    @elseif($mes == '07')
                                                        Julio
                                                    @elseif($mes == '08')
                                                        Agosto
                                                    @elseif($mes == '09')
                                                        Septiembre
                                                    @elseif($mes == '10')
                                                        Octubre
                                                    @elseif($mes == '11')
                                                        Noviembre
                                                    @elseif($mes == '12')
                                                        Diciembre
                                                    @else
                                                    @endif
    
    
                                                    {{ date('d', strtotime($latest->date_publication)) }},
                                                    {{ date('Y', strtotime($latest->date_publication)) }},
                                                </li>
                                            </ul> 
                                        </div>
                                        <div class="wt-post-title ">
                                            <h3 class="post-title"><a href="{{ route('noticia.show',$latest->id) }}"
                                                    class="site-text-secondry">{{ $latest->title }}</a></h3>
                                        </div>
                                        <div class="wt-post-readmore ">
                                            <a href="{{ route('noticia.show',$latest->id) }}" class="site-button-link black">
                                                {{ substr($latest->description, 0, 90) }} >> <a
                                                href="{{ route('noticia.show',$latest->id) }}">Ver Mas</a>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
    
    
    
                    </div>
    
                    {{-- <ul class="pagination m-b0 p-b0">
                        {{ $latests->links() }}
                    </ul> --}}
    
                </div>
    
            </div>
    
        </div>

        {{-- LAST LATESTS END --}}
        <!-- CALL US SECTION START -->
        <div class="section-full p-t80 p-b50 bg-gray-light">
            <div class="container">
                <!-- TITLE START-->
                <div class="section-head center wt-small-separator-outer text-center">
                    <div class="wt-small-separator site-text-primary">
                        <div  class="sep-leaf-left "></div>
                        <div style="color:#BB163A ">Contáctanos</div>
                        <div  class="sep-leaf-right"></div>
                    </div>
                    <h2>91 años de experiencia asesorando y brindando servicios de calidad</h2>
                </div>
                <!-- TITLE END-->

               <div class="section-content">
                    <div class="icon-circle-box-outer bg-white p-a30 m-b30">
                        <div class="row justify-content-center ">
                            <div class="col-lg-4 col-md-6 col-sm-12 ">
                                <div class="icon-circle-box v-icon-effect">
                                    <div class="wt-icon-box-wraper center">
                                        <div class="icon-md icon-circle">
                                            <span class="icon-cell">
                                                <i class="flaticon-call v-icon "></i>
                                            </span>
                                        </div>
                                        <div class="icon-content relative">
                                            <h4 style="color: #BB163A" class="wt-tilte">Llámanos</h4>
                                            <span class="icon-count-number">1</span>
                                            <a href="tel:+5912779631">a</a>
                                            <p>+591 2 779631</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="icon-circle-box v-icon-effect">
                                    <div class="wt-icon-box-wraper center">
                                        <div class="icon-md icon-circle">
                                            <span class="icon-cell">
                                                <i class="flaticon-mail v-icon "></i>
                                            </span>
                                        </div>
                                        <div class="icon-content relative">
                                            <h4  style="color: #BB163A"   class="wt-tilte">Escríbenos</h4>
                                                <span class="icon-count-number">2</span>
                                            <p>cni@cnibolivia.com</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="icon-circle-box  v-icon-effect">
                                    <div class="wt-icon-box-wraper center">
                                        <div class="icon-md icon-circle">
                                            <span class="icon-cell">
                                                <i class="flaticon-history v-icon "></i>
                                            </span>
                                        </div>
                                        <div class="icon-content relative">
                                            <h4  style="color: #BB163A"  class="wt-tilte">Visítanos</h4>
                                            <span class="icon-count-number">3</span>
                                            <p><span >Lunes - Viernes  08:30 - 16:30</span></p>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
               </div>

           </div>
        </div>
        <!-- CALL US SECTION END -->








        <!-- ABOUT ONE SECTION START -->
        <div class="section-full p-t80 p-b50 bg-no-repeat bg-center bg-white">
            <div class="about-section-three">
                <div class="container">
                    <div class="section-content">
                        <div class="row justify-content-center d-flex">

                            <div class="col-lg-6 col-md-12 m-b30">
                                <div class="about-max-three">
                                    <div class="about-max-three-media"><img src="images/ui-10/intro-pic.jpg" alt="" ></div>
                                    <div class="about-three">
                                        <div class="about-year">
                                            <div class="about-year-info">
                                                <span class="icon-md p-t10">
                                                    <i class="flaticon-industry"></i>
                                                </span>
                                                <h3 class="wt-tilte">91 Años Fortaleciendo la Industria</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-12 m-b30">
                                <div class="about-section-three-right">
                                    <!-- TITLE START-->
                                    <div class="left wt-small-separator-outer">
                                        <div class="wt-small-separator site-text-primary">
                                            <div  class="sep-leaf-left"></div>
                                            <div style="color: #BB163A">Acerca de Nosotros</div>
                                            <div  class="sep-leaf-right"></div>
                                        </div>
                                        <h2>Brindamos los mejores servicios industriales.</h2>

                                    </div>
                                    <!-- TITLE END-->


                                     <!-- Accordian -->
                                    <div class="wt-accordion acc-bg-gray m-b50 about-section-three-acc" id="accordion">
                                        <div class="panel wt-panel">
                                          <div class="acod-head acc-actives" id="headingOne">
                                            <h5 class="acod-title">
                                              <a style="color: #BB163A" data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                Misión
                                                <span class="indicator"><i class="fa"></i></span>
                                              </a>
                                            </h5>
                                          </div>

                                          <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                            <div class="acod-content p-tb15">
                                                Somos una institución de servicios, de carácter privado y sin fines de lucro, que promueve el desarrollo del sector industrial y de la comunidad empresarial para la generación de recursos, empleo sostenible y el mejoramiento de la calidad de vida en el país.
                                            </div>
                                          </div>
                                        </div>
                                        <div class="panel wt-panel">
                                          <div class="acod-head" id="headingTwo">
                                            <h5 class="mb-0">
                                              <a style="color: #BB163A" class="collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                Visión
                                                <span class="indicator"><i class="fa"></i></span>
                                              </a>
                                            </h5>
                                          </div>
                                          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                            <div class="acod-content p-tb15">
                                                Ser una institución líder, representativa, reconocida a nivel nacional e internacional por su contribución al desarrollo del sector industrial, del empresariado y de la sociedad en su conjunto.
                                            </div>
                                          </div>
                                        </div>
                                        <div class="panel wt-panel">
                                          <div class="acod-head" id="headingThree">
                                            <h5 class="mb-0">
                                              <a style="color: #BB163A" class="collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                Política de Calidad
                                                <span class="indicator"><i class="fa"></i></span>
                                              </a>
                                            </h5>
                                          </div>
                                          <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                            <div class="acod-content p-tb15">
                                                Defendemos los intereses del sector industrial boliviano y promovemos su desarrollo. Para este fin prestamos servicios de capacitación, asesoramiento, asistencia técnica e información, orientados a cumplir con los requerimientos y lograr la satisfacción de los clientes, en base al talento de nuestros recursos humanos y en busca del mejoramiento continuo y la eficiencia de nuestros procesos.
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
        <!-- ABOUT ONE SECTION END -->





        <!-- SERVICE SECTION START -->
        <div class="section-full p-t80 p-b50 bg-white">

            <div class="container">
                <!-- TITLE START-->
                <div class="section-head center wt-small-separator-outer text-center">
                    <div class="wt-small-separator site-text-primary">
                        <div  class="sep-leaf-left"></div>
                        <div style="color: #BB163A" >Los mejores servicios para la industria</div>
                        <div  class="sep-leaf-right"></div>
                    </div>
                    <h2 >Ofrecemos un equipo multidiciplinario para generar soluciones</h2>
                </div>
                <!-- TITLE END-->

               <div class="section-content">
                    <div class="row justify-content-center">

                        <!-- COLUMNS 1 -->
                        <div class="col-lg-4 col-md-6 m-b30 animate_line">

                            <div class="wt-box service-box-1-new bg-white cardbg">
                                <div class="wt-icon-box-wraper-new">
                                    <div class="icon-xl inline-icon">
                                        <span class="icon-cell site-text-primary"><i class="flaticon-trophy"></i></span>
                                    </div>
                                    <div class="wt-icon-number-new"><span>01</span></div>
                                </div>

                                <div class="service-box-title-new title-style-2 site-text-secondry">
                                    <h3 class="s-title-one">REPRESENTACIÓN</h3>
                                </div>



                                <div class="service-box-new-link">
                                    <a href="{{ url('representacion') }}" class="site-button-link">Leer Más</a>
                                </div>
                                <div class="cardbg-pic" style="background-image: url(images/ui-10/services/1.jpg);"></div>

                            </div>
                        </div>

                        <!-- COLUMNS 2 -->
                        <div class="col-lg-4 col-md-6 m-b30 animate_line">
                            <div class="wt-box service-box-1-new bg-white cardbg">
                                <div class="wt-icon-box-wraper-new">
                                    <div class="icon-xl inline-icon">
                                        <span class="icon-cell site-text-primary"><i class="flaticon-conveyor"></i></span>
                                    </div>
                                    <div class="wt-icon-number-new"><span>02</span></div>
                                </div>

                                <div class="service-box-title-new title-style-2 site-text-secondry">
                                    <h3 class="s-title-one">SERVICIO AL ASOCIADO</h3>
                                </div>

                                <div class="service-box-new-link">
                                    <a href="{{ url('servicioalasociado') }}" class="site-button-link">Leer Más</a>
                                </div>
                                <div class="cardbg-pic" style="background-image: url(images/ui-10/services/2.jpg);"></div>

                            </div>
                        </div>

                        <!-- COLUMNS 3 -->
                        <div class="col-lg-4 col-md-6 m-b30 animate_line">
                            <div class="wt-box service-box-1-new bg-white cardbg">
                                <div class="wt-icon-box-wraper-new">
                                    <div class="icon-xl inline-icon">
                                        <span class="icon-cell site-text-primary"><i class="flaticon-robotic-arm"></i></span>
                                    </div>
                                    <div class="wt-icon-number-new"><span>03</span></div>
                                </div>

                                <div class="service-box-title-new title-style-2 site-text-secondry">
                                    <h3 class="s-title-one">SERVICIOS JURÍDICOS</h3>
                                </div>


                                <div class="service-box-new-link">
                                    <a href="{{ url('serviciosjuridicos') }}" class="site-button-link">Leer Más</a>
                                </div>
                                <div class="cardbg-pic" style="background-image: url(images/ui-10/services/3.jpg);"></div>

                            </div>
                        </div>

                        <!-- COLUMNS 4 -->
                        <div class="col-lg-4 col-md-6 m-b30 animate_line">
                            <div class="wt-box service-box-1-new bg-white cardbg">
                                <div class="wt-icon-box-wraper-new">
                                    <div class="icon-xl inline-icon">
                                        <span class="icon-cell site-text-primary"><i class="flaticon-history"></i></span>
                                    </div>
                                    <div class="wt-icon-number-new"><span>04</span></div>
                                </div>

                                <div class="service-box-title-new title-style-2 site-text-secondry">
                                    <h3 class="s-title-one">CAPACITACIONES</h3>
                                </div>


                                <div class="service-box-new-link">
                                    <a href="{{ url('capacitaciones') }}" class="site-button-link">Leer Más</a>
                                </div>
                                <div class="cardbg-pic" style="background-image: url(images/ui-10/services/4.jpg);"></div>

                            </div>
                        </div>

                        <!-- COLUMNS 5
                        <div class="col-lg-4 col-md-6 m-b30 animate_line">
                            <div class="wt-box service-box-1-new bg-white cardbg">
                                <div class="wt-icon-box-wraper-new">
                                    <div class="icon-xl inline-icon">
                                        <span class="icon-cell site-text-primary"><i class="flaticon-industry"></i></span>
                                    </div>
                                    <div class="wt-icon-number-new"><span>05</span></div>
                                </div>
                                <div class="service-box-title-new title-style-2 site-text-secondry">
                                    <h3 class="s-title-one">SERVICIOS ADICIONALES</h3>
                                </div>
                                <div class="service-box-new-link">
                                    <a href="{{ url('serviciosadicionales') }}" class="site-button-link">Leer Más</a>
                                </div>
                                <div class="cardbg-pic" style="background-image: url(images/ui-10/services/5.jpg);"></div>
                            </div>
                        </div>
                    -->
                          <!-- COLUMNS 6
                          <div class="col-lg-4 col-md-6 m-b30 animate_line">
                            <div class="wt-box service-box-1-new bg-white cardbg">
                                <div class="wt-icon-box-wraper-new">
                                    <div class="icon-xl inline-icon">
                                        <span class="icon-cell site-text-primary"><i class="flaticon-helmet"></i></span>
                                    </div>
                                    <div class="wt-icon-number-new"><span>06</span></div>
                                </div>
                                <div class="service-box-title-new title-style-2 site-text-secondry">
                                    <h3 class="s-title-one">SERVICIOS EN TIC'S</h3>
                                </div>
                                <div class="service-box-new-link">
                                    <a href="s-mechanical.html" class="site-button-link">Leer Más</a>
                                </div>
                                <div class="cardbg-pic" style="background-image: url(images/ui-10/services/5.jpg);"></div>
                            </div>
                        </div>
                        -->



                    </div>

               </div>

           </div>
        </div>
        <!-- SERVICES SECTION END -->







        <!-- BUTTON TOP START -->
		<button class="scroltop"><span class="fa fa-angle-up  relative" id="btn-vibrate"></span></button>


        @endsection
