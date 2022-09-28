@extends('layouts.master')
@extends('layouts.error')


@section('body')

    <!--404 Section-->
    <section class="error-section">
    	<div class="auto-container">
        	<div class="row clearfix">

                <div class="col-md-6 col-sm-12 col-xs-12 pull-right">
                    <div class="text-column clearfix">
                        <div class="error-text">
                            <h1 class="bigger-font">@yield('number')</h1>
                            <h3>Algo anda <span class="theme_color">mal!!</span></h3>
                            <div class="text">La página que está buscando fue movida, eliminada, <br>renombrada o podría nunca existir.</div>
                            <a href="{{url('/')}}" class="theme-btn btn-style-three">Go Home</a>
                        </div>
                    </div>
                </div>

            	<div class="col-md-6 col-sm-12 col-xs-12 pull-left">
                	<figure class="image-box"><img src="images/resource/error-image.png" class="img-responsive" alt=""></figure>

                </div>


            </div>
    	</div>
    </section>


@endsection
