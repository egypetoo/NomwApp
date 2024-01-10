@extends('layouts.admin')
@section('meta')
    <title>{{trans('home.add_fund')}}</title>
@endsection
@section('content')

<div class="container-fluid">
        <!-- Page Header -->
        <div class="page-header">
            <div>
                <h2 class="main-content-title tx-24 mg-b-5">{{trans('home.funds')}}</h2>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/admin')}}">{{trans('home.admin')}}</a></li>
                    <li class="breadcrumb-item"><a href="{{url('admin/funds')}}">{{trans('home.funds')}}</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{trans('home.add_fund')}}</li>
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
                            <h6 class="card-title ">{{trans('home.add_fund')}}</h6>
                        </div>
                        {!! Form::open(['route' => 'funds.store', 'data-toggle'=>'validator', 'files'=>'true']) !!}
                            <div class="row">

                                <div class="form-group col-md-3">
                                    <label for="name_en">{{trans('home.name_en')}}</label>
                                    <input type="text"  class="form-control" placeholder="{{trans('home.name_en')}}" name="name_en" required>
                                </div>

                                <div class="form-group col-md-3">
                                    <label for="name_ar">{{trans('home.name_ar')}}</label>
                                    <input type="text"  class="form-control" placeholder="{{trans('home.name_ar')}}" name="name_ar">
                                </div>
								
                                <div class="col-md-3">
                                    <label>{{trans('home.image')}}</label>
                                    <div class="input-group mb-1">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"> {{trans('home.upload')}}</span>
                                        </div>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="image">
                                            <label class="custom-file-label" for="inputGroupFile01">{{trans('home.choose_image')}}</label>
                                        </div>
                                    </div>
                                </div>
								<div class="col-md-3">
                                    <label>{{trans('home.pdf')}}</label>
                                    <div class="input-group mb-1">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"> {{trans('home.upload')}}</span>
                                        </div>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="pdf">
                                            <label class="custom-file-label" for="inputGroupFile01">{{trans('home.choose_pdf')}}</label>
                                        </div>
                                    </div>
                                </div>
								
								
                                <div class="form-group col-md-6 ">
                                    <label for="text_en">{{trans('home.text_en')}}</label>
                                    <textarea class="form-control area1" name="text_en" placeholder="{{trans('home.text_en')}}" ></textarea>
                                </div>

								<div class="form-group col-md-6 "> 
                                    <label for="text_ar">{{trans('home.text_ar')}}</label>
                                    <textarea class="form-control area1" name="text_ar" placeholder="{{trans('home.text_ar')}}" ></textarea>
                                </div>

                                {{--<div class="form-group col-md-6 ">
                                        <label for="blogcategory">{{trans('home.meta_keywords')}}</label>
                                        <textarea class="form-control " name="meta_keywords" placeholder="{{trans('home.meta_keywords')}}" ></textarea>
                                </div>

                                <div class="form-group col-md-6 "> 
                                    <label for="blogcategory">{{trans('home.meta_description')}}</label>
                                    <textarea class="form-control " name="meta_description" placeholder="{{trans('home.meta_description')}}" ></textarea>
                                </div>--}}
                                

                                <div class="form-group col-md-12">
                                    <label class="ckbox">
                                        <input name="status" value="1" type="checkbox"><span class="tx-13">{{trans('home.publish')}}</span>
                                    </label>
                                </div>
                                
                                <div class="form-group col-md-12">
                                    <button type="submit" class="btn btn-success"><i class="image-note"></i> {{trans('home.save')}} </button>
                                    <a href="{{url('/admin/funds')}}"><button type="button" class="btn btn-danger mr-1"><i class="image-trash"></i> {{trans('home.cancel')}}</button></a>
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
