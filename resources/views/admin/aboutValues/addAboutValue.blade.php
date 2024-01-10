@extends('layouts.admin')
@section('meta')
    <title>{{trans('home.add_aboutValue')}}</title>
@endsection
@section('content')

<div class="container-fluid">
        <!-- Page Header -->
        <div class="page-header">
            <div>
                <h2 class="main-content-title tx-24 mg-b-5">{{trans('home.aboutValues')}}</h2>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/admin')}}">{{trans('home.admin')}}</a></li>
                    <li class="breadcrumb-item"><a href="{{url('admin/aboutValues')}}">{{trans('home.aboutValues')}}</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{trans('home.add_aboutValue')}}</li>
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
                            <h6 class="card-title mb-1">{{trans('home.add_aboutValue')}}</h6>
                        </div>
                        {!! Form::open(['route' => 'aboutValues.store', 'data-toggle'=>'validator', 'files'=>'true']) !!}
                            <div class="row">

                                <div class="form-group col-md-6">
                                    <label class="">{{trans('home.name_en')}}</label>
                                    <input class="form-control" name="name_en" type="text" placeholder="{{trans('home.name_en')}}" required>
                                </div>

                                <div class="form-group col-md-6">
                                    <label class="">{{trans('home.name_ar')}}</label>
                                    <input class="form-control" name="name_ar" type="text" placeholder="{{trans('home.name_ar')}}">
                                </div>
                                <div class="form-group col-md-6 ">    
                                    <fieldset class="form-group">
                                        <label for="text_en">{{trans('home.value_en')}}</label>
                                        <input class="form-control" name="text_en" type="text" placeholder="{{trans('home.value_en')}}">
                                    </fieldset>
                                </div>
                                <div class="form-group col-md-6 ">    
                                    <fieldset class="form-group">
                                        <label for="text_ar">{{trans('home.value_ar')}}</label>
                                        <input class="form-control" name="text_ar" type="text" placeholder="{{trans('home.value_ar')}}">
                                    </fieldset>
                                </div>

                                <div class="form-group col-md-12">
                                    <label class="ckbox">
                                        <input name="status" value="1" type="checkbox"><span class="tx-13">{{trans('home.publish')}}</span>
                                    </label>
                                </div>

                                <div class="form-group col-md-12">
                                    <button type="submit" class="btn btn-success"><i class="icon-note"></i> {{trans('home.save')}} </button>
                                    <a href="{{url('/admin/aboutValues')}}"><button type="button" class="btn btn-danger mr-1"><i class="icon-trash"></i> {{trans('home.cancel')}}</button></a>
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

