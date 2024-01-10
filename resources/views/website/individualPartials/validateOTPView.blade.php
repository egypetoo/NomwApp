@extends('layouts.app')
@section('meta')
    <title>{{trans('form.validate OTP')}}</title>
@endsection

@section('content')
    <!-------------------Breadcrumb----------------------->
    <section class="breadcrumb-area employee">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-item">
                        <h2 class="title">{{trans('form.validate OTP')}}</h2>
                    </div>  
                </div>
            </div>
        </div>
    </section>
    <!------------------- End Breadcrumb----------------------->
    <!------------------------------------------------- Start Form Wizard page ------------------------------------------------->
    <section id="login">
        <div class="container">
            @if(Session::has('error'))
            <div class="row mr-2 ml-2" >
                    <button type="text" class="btn btn-lg btn-block btn-outline-danger mb-2"
                            id="type-error">{{Session::get('error')}}
                    </button>
            </div>
            @endif
            @if(Session::has('success'))
            <div class="row mr-2 ml-2">
                    <button type="text" class="btn btn-lg btn-block btn-outline-success mb-2"
                            id="type-error">{{Session::get('success')}}
                    </button>
            </div>
            @endif
            <div class="row">
                <!-------------------------------------------- Start Top----------------------------------------------->
                <div class="col-sm-12 col-md-12 col-lg-6 form-center">
                    <div class="card">
                        <div class="card-img">
                            <img src="{{url('resources/assets/front/images/id-card.png')}}">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">{{trans('form.Verify the identity of the applicant')}}</h5>
                            <form method="post" action="{{url('indvidual_validateOTP')}}">
                                @csrf
                                <div class="form-row first">
                                    <div class="form-group number">
                                        <input class="form-control" type="text" name="otp" placeholder="{{trans('form.otp')}}" aria-label="default input example">
                                        @error('otp')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group bottom">
                                    <button type="submit" class="btn btn-primary">{{trans('form.Submit')}}</button>
                                </div>
                                
                            </form>
                        </div>
                    </div>
                </div>
    
            </div>
        </div>
    </section>
    <!-------------------------------------------------- End  Form Wizard page ------------------------------------------------->   

@endsection
