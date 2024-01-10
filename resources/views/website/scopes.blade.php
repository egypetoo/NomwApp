@extends('layouts.app')
@section('meta')

@endsection

@section('content')
    <!--title-->
    <section class="page-title" style="background-image:url({{url('resources/assets/front/images/blog/coo.jpg')}});">
        <div class="container-fluid">
            <div class="inner-container clearfix">
                <!-- <div class="title-box">
                    <h1> عيادات الدكتور أحمد سليمان</h1>
                </div> -->
                <ul class="bread-crumb clearfix">
                    <li><a href="{{url('/')}}">{{trans('home.home')}}</a></li>
                    <li>{{trans('home.galleryImages')}}</li>
                </ul>
            </div>
        </div>
    </section>

    <!--Before After Start-->

    <section class="project-one">
        <div class="site-footer__main-pattern-bg1" style="background-color: #a0a1a5 "></div>
            <div class="project-one-container">
                <div class="container">

                    <div class="section-title text-center">
                    
                                <!-- <h2 class="section-title__title">معرض الصور</h2> -->
                    </div>
                    <div class="row">
                        @foreach ($galleryImagesBefore as $image)
                            <div class="col-xl-3 col-lg-6 col-md-6">
                                <div class="project-one__single">
                                    <div class="project-one__img-box">
                                        <div class="project-one__img">
                                            <img src="{{url('uploads/galleryImages/source/' . $image->img)}}" alt="galleryImage">
                                            <div class="project-one__hover">
                                                <a href="{{url('uploads/galleryImages/source/' . $image->img)}}" class="img-popup"><i class="fas fa-search-plus"></i></a> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

                   
        <!--Before After End-->
@endsection