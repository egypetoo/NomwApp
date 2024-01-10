@extends('layouts.admin')
@section('meta')
    <title>{{trans('home.seo_assistant')}}</title>
@endsection
@section('content')

<div class="container-fluid">

        <!-- Page Header -->
        <div class="page-header">
            <div>
                <h2 class="main-content-title tx-24 mg-b-5">{{trans('home.seo_assistant')}}</h2>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/admin')}}">{{trans('home.admin')}}</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{trans('home.seo_assistant')}}</li>
                </ol>
            </div>
        </div>
        <!-- End Page Header -->

        @if(session()->has('success'))
            <div class="alert alert-success">
                {{ session()->pull('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        <!-- Row-->
        <div class="row">
            <div class="col-sm-12 col-xl-12 col-lg-12">
                <div class="card custom-card overflow-hidden">
    
                    <div class="card-body">
                        <div>
                            <h6 class="card-title mb-1">{{trans('home.seo_assistant')}}</h6>
                        </div>
                        {!! Form::open(['method'=>'PATCH','url' => 'admin/seo-assistant/'.$seo->id, 'data-toggle'=>'validator', 'files'=>'true']) !!}
                            <div class="row">
                                
                                <div class="form-group col-md-6">
                                    <label for="home_meta_title"> {{trans('home.home_meta_title')}}</label>
                                    <textarea class="form-control" name="home_meta_title" placeholder="{{trans('home.home_meta_title')}}">{{$seo->home_meta_title}}</textarea>
                                </div>
                                
                                <div class="form-group col-md-6">
                                    <label for="home_meta_desc"> {{trans('home.home_meta_desc')}}</label>
                                    <textarea class="form-control" name="home_meta_desc" placeholder="{{trans('home.home_meta_desc')}}">{{$seo->home_meta_desc}}</textarea>
                                </div>
                                
                                <div class="form-group col-md-12">
                                    <label class="ckbox">
                                        <input name="home_meta_robots" value="1" {{($seo->home_meta_robots == 1)? 'checked':''}} type="checkbox"><span class="tx-13">{{trans('home.home_meta_robots')}} (index)</span>
                                    </label>
                                </div>
                                
                                <div class="col-md-12">
                                    <hr>
                                </div>
                                
                                <div class="form-group col-md-6">
                                    <label for="about_meta_title"> {{trans('home.about_meta_title')}}</label>
                                    <textarea class="form-control" name="about_meta_title" placeholder="{{trans('home.about_meta_title')}}">{{$seo->about_meta_title}}</textarea>
                                </div>
                                
                                <div class="form-group col-md-6">
                                    <label for="about_meta_desc"> {{trans('home.about_meta_desc')}}</label>
                                    <textarea class="form-control" name="about_meta_desc" placeholder="{{trans('home.about_meta_desc')}}">{{$seo->about_meta_desc}}</textarea>
                                </div>
                                
                                <div class="form-group col-md-12">
                                    <label class="ckbox">
                                        <input name="about_meta_robots" value="1" {{($seo->about_meta_robots == 1)? 'checked':''}} type="checkbox"><span class="tx-13">{{trans('home.about_meta_robots')}} (index)</span>
                                    </label>
                                </div>
                                
                                <div class="col-md-12">
                                    <hr>
                                </div>
                                
                                <div class="form-group col-md-6">
                                    <label for="contact_meta_title"> {{trans('home.contact_meta_title')}}</label>
                                    <textarea class="form-control" name="contact_meta_title" placeholder="{{trans('home.contact_meta_title')}}">{{$seo->contact_meta_title}}</textarea>
                                </div>
                                
                                <div class="form-group col-md-6">
                                    <label for="contact_meta_desc"> {{trans('home.contact_meta_desc')}}</label>
                                    <textarea class="form-control" name="contact_meta_desc" placeholder="{{trans('home.contact_meta_desc')}}">{{$seo->contact_meta_desc}}</textarea>
                                </div>
                                
                                <div class="form-group col-md-12">
                                    <label class="ckbox">
                                        <input name="contact_meta_robots" value="1" {{($seo->contact_meta_robots == 1)? 'checked':''}} type="checkbox"><span class="tx-13">{{trans('home.contact_meta_robots')}} (index)</span>
                                    </label>
                                </div>
                                
                                <div class="col-md-12">
                                    <hr>
                                </div>
                                
                                <div class="form-group col-md-6">
                                    <label for="gallery_images_meta_title"> {{trans('home.gallery_images_meta_title')}}</label>
                                    <textarea class="form-control" name="gallery_images_meta_title" placeholder="{{trans('home.gallery_images_meta_title')}}">{{$seo->gallery_images_meta_title}}</textarea>
                                </div>
                                
                                <div class="form-group col-md-6">
                                    <label for="gallery_images_meta_desc"> {{trans('home.gallery_images_meta_desc')}}</label>
                                    <textarea class="form-control" name="gallery_images_meta_desc" placeholder="{{trans('home.gallery_images_meta_desc')}}">{{$seo->gallery_images_meta_desc}}</textarea>
                                </div>
                                
                                <div class="form-group col-md-12">
                                    <label class="ckbox">
                                        <input name="gallery_images_meta_robots" value="1" {{($seo->gallery_images_meta_robots == 1)? 'checked':''}} type="checkbox"><span class="tx-13">{{trans('home.gallery_images_meta_robots')}} (index)</span>
                                    </label>
                                </div>
                                
                                <div class="col-md-12">
                                    <hr>
                                </div>
                                
                                <div class="form-group col-md-6">
                                    <label for="gallery_videos_meta_title"> {{trans('home.gallery_videos_meta_title')}}</label>
                                    <textarea class="form-control" name="gallery_videos_meta_title" placeholder="{{trans('home.gallery_videos_meta_title')}}">{{$seo->gallery_videos_meta_title}}</textarea>
                                </div>
                                
                                <div class="form-group col-md-6">
                                    <label for="gallery_videos_meta_desc"> {{trans('home.gallery_videos_meta_desc')}}</label>
                                    <textarea class="form-control" name="gallery_videos_meta_desc" placeholder="{{trans('home.gallery_videos_meta_desc')}}">{{$seo->gallery_videos_meta_desc}}</textarea>
                                </div>
                                
                                <div class="form-group col-md-12">
                                    <label class="ckbox">
                                        <input name="gallery_videos_meta_robots" value="1" {{($seo->gallery_videos_meta_robots == 1)? 'checked':''}} type="checkbox"><span class="tx-13">{{trans('home.gallery_videos_meta_robots')}} (index)</span>
                                    </label>
                                </div>

                                <div class="col-md-12">
                                    <hr>
                                </div>
                                
                                <div class="form-group col-md-6">
                                    <label for="services_meta_title"> {{trans('home.services_meta_title')}}</label>
                                    <textarea class="form-control" name="services_meta_title" placeholder="{{trans('home.services_meta_title')}}">{{$seo->services_meta_title}}</textarea>
                                </div>
                                
                                <div class="form-group col-md-6">
                                    <label for="services_meta_desc"> {{trans('home.services_meta_desc')}}</label>
                                    <textarea class="form-control" name="services_meta_desc" placeholder="{{trans('home.services_meta_desc')}}">{{$seo->services_meta_desc}}</textarea>
                                </div>
                                
                                <div class="form-group col-md-12">
                                    <label class="ckbox">
                                        <input name="services_meta_robots" value="1" {{($seo->services_meta_robots == 1)? 'checked':''}} type="checkbox"><span class="tx-13">{{trans('home.services_meta_robots')}} (index)</span>
                                    </label>
                                </div>

                                <div class="col-md-12">
                                    <hr>
                                </div>
                                
                                <div class="form-group col-md-6">
                                    <label for="projects_meta_title"> {{trans('home.projects_meta_title')}}</label>
                                    <textarea class="form-control" name="projects_meta_title" placeholder="{{trans('home.projects_meta_title')}}">{{$seo->projects_meta_title}}</textarea>
                                </div>
                                
                                <div class="form-group col-md-6">
                                    <label for="projects_meta_desc"> {{trans('home.projects_meta_desc')}}</label>
                                    <textarea class="form-control" name="projects_meta_desc" placeholder="{{trans('home.services_meta_desc')}}">{{$seo->projects_meta_desc}}</textarea>
                                </div>
                                
                                <div class="form-group col-md-12">
                                    <label class="ckbox">
                                        <input name="projects_meta_robots" value="1" {{($seo->projects_meta_robots == 1)? 'checked':''}} type="checkbox"><span class="tx-13">{{trans('home.projects_meta_robots')}} (index)</span>
                                    </label>
                                </div>
                                
                                <div class="col-md-12">
                                    <hr>
                                </div>
                                
                                <div class="form-group col-md-6">
                                    <label for="blogs_meta_title"> {{trans('home.blogs_meta_title')}}</label>
                                    <textarea class="form-control" name="blogs_meta_title" placeholder="{{trans('home.blogs_meta_title')}}">{{$seo->blogs_meta_title}}</textarea>
                                </div>
                                
                                <div class="form-group col-md-6">
                                    <label for="blogs_meta_desc"> {{trans('home.blogs_meta_desc')}}</label>
                                    <textarea class="form-control" name="blogs_meta_desc" placeholder="{{trans('home.blogs_meta_desc')}}">{{$seo->blogs_meta_desc}}</textarea>
                                </div>
                                
                                <div class="form-group col-md-12">
                                    <label class="ckbox">
                                        <input name="blogs_meta_robots" value="1" {{($seo->blogs_meta_robots == 1)? 'checked':''}} type="checkbox"><span class="tx-13">{{trans('home.blogs_meta_robots')}} (index)</span>
                                    </label>
                                </div>
                        
                                <div class="col-md-12">
                                    <hr>
                                </div>
                                
                                <div class="form-group col-md-6">
                                    <label for="book_now_meta_title"> {{trans('homecareer_meta_title')}}</label>
                                    <textarea class="form-control" name="book_now_meta_title" placeholder="{{trans('homecareer_meta_title')}}">{{$seo->book_now_meta_title}}</textarea>
                                </div>
                                
                                <div class="form-group col-md-6">
                                    <label for="book_now_meta_desc"> {{trans('homecareer_meta_desc')}}</label>
                                    <textarea class="form-control" name="book_now_meta_desc" placeholder="{{trans('homecareer_meta_desc')}}">{{$seo->book_now_meta_desc}}</textarea>
                                </div>
                                
                                <div class="form-group col-md-12">
                                    <label class="ckbox">
                                        <input name="book_now_meta_robots" value="1" {{($seo->book_now_meta_robots == 1)? 'checked':''}} type="checkbox"><span class="tx-13">{{trans('homecareer_meta_robots')}} (index)</span>
                                    </label>
                                </div>
                                
                                <div class="form-group col-md-12">
                                    <button type="submit" class="btn btn-success"><i class="icon-note"></i> {{trans('home.save')}} </button>
                                    <a href="{{url('/admin')}}"><button type="button" class="btn btn-danger mr-1"><i class="icon-trash"></i> {{trans('home.cancel')}}</button></a>
                                </div>
                            </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
        <!-- End Row -->
    </div>
@endsection