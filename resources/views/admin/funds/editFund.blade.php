@extends('layouts.admin')
@section('meta')
    <title>{{trans('home.edit_fund')}}</title>
@endsection

@section('style')
<style>
    img {
        display:block !important;
    }
    .dz-hidden-input{
        position: absolute !important;
        top: 0px !important;
        left: 250px !important;
    }

</style>
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
                    <li class="breadcrumb-item active" aria-current="page">{{trans('home.edit_fund')}}</li>
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
                            <h6 class="card-title ">{{trans('home.edit_fund')}}</h6>
                        </div>
                        {!! Form::open(['method'=>'PATCH','url' => 'admin/funds/'.$fund->id, 'data-toggle'=>'validator', 'files'=>'true']) !!}
                            <div class="row">

                                <div class="form-group col-md-3">
                                    <label for="name_en">{{trans('home.name_en')}}</label>
                                    <input type="text"  class="form-control" placeholder="{{trans('home.name_en')}}" name="name_en" value="{{$fund->name_en}}" required>
                                </div>

                                <div class="form-group col-md-3">
                                    <label for="name_ar">{{trans('home.name_ar')}}</label>
                                    <input type="text"  class="form-control" placeholder="{{trans('home.name_ar')}}" name="name_ar" value="{{$fund->name_ar}}">
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
                                @if($fund->image)
								<div class="col-md-6"></div>
                                <div class="col-md-6">
                                    <div class="row">
										<div class="col-md-12">
											<img src="{{url('\uploads\funds\source')}}\{{$fund->image}}" width="200" height="150">
										</div>
                                    </div>
                                </div>
								@endif


                                <div class="form-group col-md-6 ">
                                    <label for="text_en">{{trans('home.text_en')}}</label>
                                    <textarea class="form-control area1" name="text_en" placeholder="{{trans('home.text_en')}}" >{!! $fund->text_en !!}</textarea>
                                </div>

                                <div class="form-group col-md-6 "> 
                                    <label for="text_ar">{{trans('home.text_ar')}}</label>
                                    <textarea class="form-control area1" name="text_ar" placeholder="{{trans('home.text_ar')}}" >{!! $fund->text_ar !!}</textarea>
                                </div>
                                
                                <div class="form-group col-md-12">
                                    <label class="ckbox">
                                        <input name="status" value="1" {{($fund->status == 1)? 'checked':''}} type="checkbox"><span class="tx-13">{{trans('home.publish')}}</span>
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
