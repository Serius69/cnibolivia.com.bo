@extends('layouts.masteradmin')

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
                            <a href="banners.show"><img src="\img\noticias\{{$banner->path}}" alt=""></a>
                        </div>
                        <div class="wt-post-info  bg-white p-t30">
                            <div class="wt-post-title ">
                                <h2 class="post-title">{{$banner->title}}</h2>
                                <h3 class="post-title">{{$banner->subtitle}}</h3>
                            </div>
                            <div class="wt-post-title ">
                                <a href="banners.show">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 </div>
@endsection
