@extends('layouts.admin')
@section('meta')
    <title>{{trans('home.edit_setting')}}</title>
@endsection
@section('content')

<div class="container-fluid">

        <!-- Page Header -->
        <div class="page-header">
            <div>
                <h2 class="main-content-title tx-24 mg-b-5">{{trans('home.edit_setting')}}</h2>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/admin')}}">{{trans('home.admin')}}</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{trans('home.edit_setting')}}</li>
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
                            <h6 class="card-title mb-1">{{trans('home.edit_setting')}}</h6>
                        </div>
                        {!! Form::open(['method'=>'PATCH','url' => 'admin/settings/'.$settings->id, 'data-toggle'=>'validator', 'files'=>'true']) !!}
                            <div class="row">

                                <div class="form-group col-md-12">
                                    <label for="helperText">{{trans('home.default_lang')}}</label>
                                    <select class="form-control select2" name="default_lang" required>
                                        <option value="en" {{ ($settings->default_lang=="en")?'selected':'' }}>{{trans('home.english')}}</option>
                                        <option value="ar" {{ ($settings->default_lang=="ar")?'selected':'' }}>{{trans('home.arabic')}}</option>
                                    </select>
                                </div>

                                <div class="form-group col-md-6">
                                    <label class="">{{trans('home.contact_email')}}</label>
                                    <input type="text" class="form-control" placeholder="{{trans('home.contact_email')}}" name="contact_email" value="{{ $settings->contact_email }}">
                                </div>

                                <div class="form-group col-md-6">
                                    <label class="">{{trans('home.email')}}</label>
                                    <input type="text" class="form-control" placeholder="{{trans('home.email')}}" name="email" value="{{ $settings->email }}">
                                </div>

                                <div class="form-group col-md-2">
                                    <label class="">{{trans('home.telphone')}}</label>
                                    <input type="number"  min="0" class="form-control" placeholder="{{trans('home.telphone')}}" name="telphone" value="{{ $settings->telphone }}">
                                </div>

                                <div class="form-group col-md-2">
                                    <label class="">{{trans('home.mobile')}}</label>
                                    <input type="number"  min="0" class="form-control" placeholder="{{trans('home.mobile')}}" name="mobile" value="{{ $settings->mobile }}">
                                </div>
                                
                                <div class="form-group col-md-2">
                                    <label class="">{{trans('home.telphone2')}}</label>
                                    <input type="number"  min="0" class="form-control" placeholder="{{trans('home.telphone2')}}" name="telphone2" value="{{ $settings->telphone2 }}">
                                </div>

                                <div class="form-group col-md-2">
                                    <label class="">{{trans('home.mobile2')}}</label>
                                    <input type="number"  min="0" class="form-control" placeholder="{{trans('home.mobile2')}}" name="mobile2" value="{{ $settings->mobile2 }}">
                                </div>

                                <div class="form-group col-md-4">
                                    <label class="">{{trans('home.fax')}}</label>
                                    <input type="fax"  min="0" class="form-control" placeholder="{{trans('home.fax')}}" name="fax" value="{{ $settings->fax }}">
                                </div>

                                <div class="form-group col-md-6">
                                    <label class="">{{trans('home.whatsapp')}}</label>
                                    <input type="whatsapp"  min="0" class="form-control" placeholder="{{trans('home.whatsapp')}}" name="whatsapp" value="{{ $settings->whatsapp }}">
                                </div>

                                <div class="form-group col-md-6">
                                    <label class="">{{trans('home.snapchat')}}</label>
                                    <input type="text"  min="0" class="form-control" placeholder="{{trans('home.snapchat')}}" name="youtube" value="{{ $settings->youtube }}">
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="facebook">{{trans('home.facebook')}}</label>
                                    <input type="text"  class="form-control" placeholder="{{trans('home.facebook')}}" name="facebook" value="{{ $settings->facebook }}">
                                </div>
								<div class="form-group col-md-6">
                                    <label for="linkedin">{{trans('home.linkedin')}}</label>
                                    <input type="text" class="form-control" placeholder="{{trans('home.linkedin')}}" name="linkedin" value="{{ $settings->linkedin }}">
                                </div>
								 <div class="form-group col-md-6">
                                    <label for="instgram">{{trans('home.instgram')}}</label>
                                    <input type="text"  class="form-control" placeholder="{{trans('home.instgram')}}" name="instgram" value="{{ $settings->instgram }}">
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="twitter">{{trans('home.twitter')}}</label>
                                    <input type="text" class="form-control" placeholder="{{trans('home.twitter')}}" name="twitter" value="{{ $settings->twitter }}">
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="alert_name_en">{{trans('home.alert_name_en')}}</label>
                                    <input type="text"  class="form-control" placeholder="{{trans('home.alert_name_en')}}" name="alert_name_en" value="{{ $settings->alert_name_en }}">
									</textarea>
                                </div>
								<div class="form-group col-md-6">
                                    <label for="alert_name_ar">{{trans('home.alert_name_ar')}}</label>
                                    <input type="text"  class="form-control" placeholder="{{trans('home.alert_name_ar')}}" name="alert_name_ar" value="{{ $settings->alert_name_ar }}">
									</textarea>
                                </div>
								 <div class="form-group col-md-6">
                                    <label for="alert_text_en">{{trans('home.alert_text_en')}}</label>
									<textarea class="form-control" name="alert_text_en" type="text" placeholder="{{trans('home.alert_text_en')}}">{{$settings->alert_text_en}}</textarea>
								</div>
								 <div class="form-group col-md-6">
                                    <label for="alert_text_ar">{{trans('home.alert_text_ar')}}</label>
									<textarea class="form-control" name="alert_text_ar" type="text" placeholder="{{trans('home.alert_text_ar')}}">{{$settings->alert_text_ar}}</textarea>
								</div>



                                <div class="col-md-12">
                                    <label>{{trans('home.map_url')}}</label>
                                    <textarea class="form-control" name="map_url" type="text" placeholder="{{trans('home.map_url')}}">{{$settings->map_url}}</textarea>
                                </div>
                                
                                <div class="form-group col-md-6">
                                    <label for="latitude">{{trans('home.latitude')}}</label>
                                    <input type="text"  placeholder="{{ trans('home.latitude') }}" id="latitude" class="form-control" name="lat" value="{{ $settings->lat }}" readonly>
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="longitude">{{trans('home.longitude')}}</label>
                                    <input type="text" id="longitude" class="form-control" placeholder="{{trans('home.longitude')}}" name="lng" value="{{ $settings->lng }}" readonly>
                                </div>

                                <div class="form-group col-md-12">
                                    <label for="map">{{trans('home.map')}}</label>
                                    <div id="map-canvas" style="height: 350px; margin-bottom: 15px;"></div>
                                </div>
                                
                                <div class="form-group col-md-3">
                                    <label class="">{{trans('home.cetificates')}}</label>
                                    <input type="number"  min="0" class="form-control" placeholder="{{trans('home.cetificates')}}" name="cetificates" value="{{ $settings->cetificates }}">
                                </div>
                                
                                <div class="form-group col-md-3">
                                    <label class="">{{trans('home.exp_years')}}</label>
                                    <input type="number"  min="0" class="form-control" placeholder="{{trans('home.exp_years')}}" name="exp_years" value="{{ $settings->exp_years }}">
                                </div>
                                
                                <div class="form-group col-md-3">
                                    <label class="">{{trans('home.surgeries')}}</label>
                                    <input type="number"  min="0" class="form-control" placeholder="{{trans('home.surgeries')}}" name="surgeries" value="{{ $settings->surgeries }}">
                                </div>
                                
                                <div class="form-group col-md-3">
                                    <label class="">{{trans('home.consult')}}</label>
                                    <input type="number"  min="0" class="form-control" placeholder="{{trans('home.consult')}}" name="consult" value="{{ $settings->consult }}">
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
@section('script')
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB2DM4_HwOA3s6WsWcyhRt5Q_NO9CoxZpU&callback=initMap2" async defer></script>
    <script>

        $('.lang').select2({
        });

    </script>
@endsection