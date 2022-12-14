<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from thewebmax.com/industro/index-10.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 26 Apr 2022 13:40:42 GMT -->
<head>

	<!-- META -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />
    <meta name="description" content="" />

    <!-- FAVICONS ICON -->
    <link rel="icon" href="images/favicon.html" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />

    <!-- PAGE TITLE HERE -->
    <title>CNI</title>

    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- BOOTSTRAP STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <!-- FONTAWESOME STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="css/fontawesome/css/font-awesome.min.css" />

    <!-- OWL CAROUSEL STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
    <!-- BOOTSTRAP SLECT BOX STYLE SHEET  -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap-select.min.css">
    <!-- MAGNIFIC POPUP STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="css/magnific-popup.min.css">
    <!-- LOADER STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="css/loader.min.css">
    <!-- MAIN STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
        <!-- FLATICON STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="css/flaticon.min.css">

    <!-- IMAGE POPUP -->
    <link rel="stylesheet" type="text/css" href="css/lc_lightbox.css" />

    <!-- THEME COLOR CHANGE STYLE SHEET -->
    <link rel="stylesheet" class="skin" type="text/css" href="css/skin/skin-2.css">
    <!-- SIDE SWITCHER STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="css/switcher.css">


     <!-- REVOLUTION SLIDER CSS -->
    <link rel="stylesheet" type="text/css" href="plugins/revolution/revolution/css/settings.css">
    <!-- REVOLUTION NAVIGATION STYLE -->
    <link rel="stylesheet" type="text/css" href="plugins/revolution/revolution/css/navigation.css">

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Teko:300,400,500,600,700&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,900&amp;display=swap" rel="stylesheet">

</head>

<!-- HEADER START -->
<header class="site-header header-style-1 mobile-sider-drawer-menu">

    <!-- SITE Search -->
    <div id="search-toggle-block">
        <div id="search">
            <form role="search" id="searchform" action="https://thewebmax.com/search" method="get" class="radius-xl">
                <div class="input-group">
                    <input class="form-control" value="" name="q" type="search" placeholder="Type to search"/>
                    <span class="input-group-append"><button type="button" class="search-btn"><i class="fa fa-search"></i></button></span>
                </div>
            </form>
        </div>
    </div>

    <div class="top-bar site-bg-secondry">
        <div class="container">

                <div class="d-flex justify-content-between">
                    <div class="wt-topbar-left d-flex flex-wrap align-content-start">
                        <ul class="wt-topbar-info e-p-bx text-white">
                            <li><span> Lunes - Viernes</span><span>8:30 AM -16:30 PM</span></li>
                            <li><i class="fa fa-phone"></i>+591 2 2776321</li>
                            <li><i class="fa fa-envelope"></i>info@cnibolivia.com</li>
                        </ul>
                    </div>

                    <div class="wt-topbar-right d-flex flex-wrap align-content-center">
                        <div class="header-search">
                            <a href="javascript:;" class="header-search-icon"><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                </div>

        </div>
    </div>


    <div class="container header-middle clearfix">
        <div class="logo-header">
            <div class="logo-header-inner logo-header-one">
                <a href="index.html">
                <img src="{{ url('images/cni_logo_1.png') }}" height="100" width="100" alt="" />
                </a>
            </div>
        </div>

        <div class="header-info">
            <ul>
                <li>
                    <div class="icon-md">
                        <span class="icon-cell"><i class="flaticon-trophy"></i></span>
                    </div>
                    <div class="icon-content">
                        <strong>Premio a la Resilencia</strong>
                        <span>Premio a la Resilencia</span>
                    </div>
                </li>
                <li>

                    <div class="icon-md">
                        <span class="icon-cell"><i class="flaticon-stamp"></i></span>
                    </div>
                    <div class="icon-content">
                        <strong>Compa??ia Certificada</strong>
                        <span>ISO 9001</span>
                    </div>

                </li>
            </ul>
        </div>

   </div>

    <div class="sticky-header main-bar-wraper  navbar-expand-lg">
        <div class="main-bar">
               <div class="container clearfix">
                    <!-- NAV Toggle Button -->
                    <button id="mobile-side-drawer" data-target=".header-nav" data-toggle="collapse" type="button" class="navbar-toggler collapsed">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar icon-bar-first"></span>
                        <span class="icon-bar icon-bar-two"></span>
                        <span class="icon-bar icon-bar-three"></span>
                    </button>

                    <!-- MAIN Vav -->
                    <div class="nav-animation header-nav navbar-collapse collapse d-flex justify-content-center">

                        <ul class=" nav navbar-nav">
                            <li><a href="{{ url('/') }}">INICIO</a>
                            </li>
                            <li><a href="{{ url('nosotros') }}">NOSOTROS</a>
                            </li>
                            <li><a href="{{ url ('servicios') }}">SERVICIOS</a>
                                <ul class="sub-menu">
                                    <li><a href="{{ url('representacion') }}">REPRESENTACI??N</a></li>
                                    <li><a href="{{ url('servicioalasociado') }}">SERVICIO AL ASOCIADO</a></li>
                                    <li><a href="{{ url('serviciosjuridicos') }}">SERVICIOS JUR??DICOS</a></li>
                                    <li><a href="{{ url('capacitaciones') }}">CAPACITACIONES</a></li>
                                    <li><a href="{{ url('serviciosadicionales') }}">SERVICIOS ADICIONALES</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ url('noticias') }}">NOTICIAS</a>
                            </li>
                            <li><a href="{{ url('calendario') }}">CALENDARIO</a>
                            </li>
                        </ul>
                    </div>

                    <div class="header-nav-request">
                        <a href="#" class="contact-slide-show">Hazte Miembro <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>



</header>
<!-- HEADER END -->

<body>



@yield('bodyservicios')

@include('layouts/components/footer')
@include('layouts/components/haztemiembro')

</body>




<!-- JAVASCRIPT  FILES ========================================= -->
<script  src="{{url('js/jquery-2.2.0.min.js')}}"></script>
<script  src="{{url('js/popper.min.js')}}"></script>
<script  src="{{url('js/bootstrap.min.js')}}"></script>
<script  src="{{url('js/bootstrap-select.min.js')}}"></script>
<script  src="{{url('js/magnific-popup.min.js')}}"></script>
<script  src="{{url('js/waypoints.min.js')}}"></script>
<script  src="{{url('js/counterup.min.js')}}"></script>
<script  src="{{url('js/waypoints-sticky.min.js')}}"></script>
<script  src="{{url('js/isotope.pkgd.min.js')}}"></script>
<script  src="{{url('js/owl.carousel.min.js')}}"></script>
<script  src="{{url('js/stellar.min.js')}}"></script>
<script  src="{{url('js/theia-sticky-sidebar.js')}}"></script>
<script  src="{{url('js/jquery.bootstrap-touchspin.js')}}"></script>
<script  src="{{url('js/custom.js')}}"></script>
<script  src="{{url('js/lc_lightbox.lite.js')}}"></script>
<script  src="{{url('js/switcher.js')}}"></script>
<!-- REVOLUTION JS FILES -->

<script  src="{{url('plugins/revolution/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
<script  src="{{url('plugins/revolution/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
<script  src="{{url('plugins/revolution/revolution/js/extensions/revolution-plugin.js')}}"></script>

<!-- REVOLUTION SLIDER SCRIPT FILES -->
<script  src="{{url('js/rev-script-10.js')}}"></script>


</script>

<!-- Mirrored from thewebmax.com/industro/index-10.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 26 Apr 2022 13:41:29 GMT -->
</html>
