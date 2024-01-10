@extends('layouts.admin')
@section('meta')
    <title>{{trans('home.edit_galleryVideo')}}</title>
@endsection
@section('content')

<div class="container-fluid">

        <!-- Page Header -->
        <div class="page-header">
            <div>
                <h2 class="main-content-title tx-24 mg-b-5">{{trans('home.galleryVideos_dashboard')}}</h2>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/admin')}}">{{trans('home.admin')}}</a></li>
                    <li class="breadcrumb-item"><a href="{{url('admin/gallery-videos')}}">{{trans('home.galleryVideos_dashboard')}}</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{trans('home.edit_galleryVideo')}}</li>
                </ol>
            </div>
        </div>
        <!-- End Page Header -->

        <!-- Row-->
        <div class="row">
            <div class="col-sm-12 col-xl-12 col-lg-12">
                <div class="card custom-card overflow-hidden">

                    <div class="card-body">
                        <div>
                            <h6 class="card-title mb-1">{{trans('home.edit_galleryVideo')}}</h6>
                        </div>
                        {!! Form::open(['method'=>'PATCH','url' => 'admin/gallery-videos/'.$galleryVideo->id, 'data-toggle'=>'validator', 'files'=>'true']) !!}
                            <div class="row">

                                <div class="form-group col-md-5">
                                    <fieldset class="form-group">
                                        <label for="name_en">{{trans('home.name_en')}}</label>
                                        <input type="text"  class="form-control" placeholder="{{trans('home.name_en')}}" name="name_en" value="{{$galleryVideo->name_en}}">
                                    </fieldset>
                                </div>
								<div class="form-group col-md-5">
                                    <fieldset class="form-group">
                                        <label for="name_ar">{{trans('home.name_ar')}}</label>
                                        <input type="text"  class="form-control" placeholder="{{trans('home.name_ar')}}" name="name_ar" value="{{$galleryVideo->name_ar}}" required>
                                    </fieldset>
                                </div>

                                <div class="form-group col-md-2">
                                    <fieldset class="form-group">
                                        <label for="order">{{trans('home.order')}}</label>
                                        <input type="number" min="1"  class="form-control" placeholder="{{trans('home.order')}}" name="order" value="{{$galleryVideo->order}}" >
                                    </fieldset>
                                </div>
								<div class="form-group col-md-4">
                                    <label>{{trans('home.image')}}</label>
                                    <div class="input-group ">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"> {{trans('home.upload')}}</span>
                                        </div>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="image">
                                            <label class="custom-file-label" for="inputGroupFile01">{{trans('home.choose_image')}}</label>
                                        </div>
                                    </div>
                                </div>
								<div class="form-group col-md-4">
                                    <fieldset class="form-group">
                                        <label for="position_en">{{trans('home.position_en')}}</label>
                                        <input type="text"  class="form-control" placeholder="{{trans('home.position_en')}}" name="position_en" value="{{$galleryVideo->position_en}}">
                                    </fieldset>
                                </div>
								<div class="form-group col-md-4">
                                    <fieldset class="form-group">
                                        <label for="position_ar">{{trans('home.position_ar')}}</label>
                                        <input type="text"  class="form-control" placeholder="{{trans('home.position_ar')}}" name="position_ar" value="{{$galleryVideo->position_ar}}">
                                    </fieldset>
                                </div>
								@if($galleryVideo->image)
                                    <div class="form-group col-md-12">
                                        <img src="{{url('uploads/galleryVideos/source/' . $galleryVideo->image)}}" width="150">
                                    </div>
                                @endif

                                <div class="form-group col-md-6 ">    
                                    <fieldset class="form-group">
                                        <label for="text_en">{{trans('home.text_en')}}</label>
                                        <textarea class="form-control area1" placeholder="{{trans('home.text_en')}}" name="text_en">{!!$galleryVideo->text_en!!}</textarea>
                                    </fieldset>
                                </div>

                                <div class="form-group col-md-6 ">    
                                    <fieldset class="form-group">
                                        <label for="text_ar">{{trans('home.text_ar')}}</label>
                                        <textarea class="form-control area1" placeholder="{{trans('home.text_ar')}}" name="text_ar">{!!$galleryVideo->text_ar!!}</textarea>
                                    </fieldset>
                                </div>

                                <div class="form-group col-md-12">
                                  <label class="ckbox">
                                      <input name="status" value="1" {{($galleryVideo->status == 1)? 'checked':''}} type="checkbox"><span class="tx-13">{{trans('home.publish')}}</span>
                                  </label>
                              </div>

                                <div class="form-group col-md-12">
                                    <button type="submit" class="btn btn-success"><i class="icon-note"></i> {{trans('home.save')}} </button>
                                    <a href="{{url('/admin/gallery-videos')}}"><button type="button" class="btn btn-danger mr-1"><i class="icon-trash"></i> {{trans('home.cancel')}}</button></a>
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
