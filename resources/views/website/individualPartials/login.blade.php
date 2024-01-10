@extends('layouts.app')
@section('meta')
    <title>{{trans('home.Register as an individual')}}</title>
@endsection

@section('content')
    <!-------------------Breadcrumb----------------------->
    <section class="breadcrumb-area employee">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-item">
                        <h2 class="title">{{trans('home.Register as an individual')}}</h2>
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
                            <p>
                                {{trans('form.You will receive a confirmation message to continue filling out the application, please enter your mobile number below')}}
                            </p>
                            <form method="post" action="{{url('sendRegistrationIndividualOTP')}}">
                                @csrf
                                <div class="form-row first">
                                    <div class="form-group ksa-code">
                                        <input class="form-control" type="text" placeholder="+996" disabled aria-label="default input example" name="readOnly">
                                    </div>
                                    <div class="form-group number">
                                        <input class="form-control" type="phone" name="phone" placeholder="{{trans('form.phone_num')}}" aria-label="default input example" maxlength="9" onkeypress="return isNumberKey(event)" required>
                                        @error('phone')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group bottom">
                                    <a href="{{url('indvidual-registration/have-account')}}">
                                        {{trans('form.You have an application')}}
                                    </a>
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
