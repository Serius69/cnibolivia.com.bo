@extends('layouts.master')

@section('body')
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

                <ul class="pagination m-b0 p-b0">
                    {{ $latests->links() }}
                </ul>

            </div>

        </div>

    </div>
@endsection
