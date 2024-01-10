@extends('layouts.app')
@section('meta')
    <title>{{trans('home.verify NationalId')}}</title>
@endsection

@section('content')
    <!-------------------Breadcrumb----------------------->
    <section class="breadcrumb-area employee">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-item">
                        <h2 class="title">{{trans('home.verify NationalId')}}</h2>
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
                                {{trans('form.You will receive a notification through Nafath App to accept or reject the request')}}
								<br> {{trans('form.the random number is')}} 
								<span class="rand-num">{{$res->random}}</span>
                            </p>
                            <form method="post" action="{{url('check-nafath-verfication')}}">
                                @csrf
                                <div class="form-row first">
                                    <div class="form-group number">
                                        <input type="hidden" name="nationalId" value="{{$nationalId}}"/>
										<input type="hidden" name="transId" value="{{$res->transId}}"/>
										<input type="hidden" name="random" value="{{$res->random}}"/>
                                    </div>
                                </div>
                                <div class="form-group bottom">
                                    <button type="submit" class="btn btn-primary">{{trans('form.verify')}}</button>
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
