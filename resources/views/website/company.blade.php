@extends('layouts.app')
@section('meta')
    <title>{{trans('home.Register as a company')}}</title>
@endsection
@php
    $company =session()->get('company');
@endphp
@section('content')
    <!-------------------Breadcrumb----------------------->
    <section class="breadcrumb-area employee">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-item">
                        <h2 class="title">{{trans('home.Register as a company')}}</h2>
                    </div>  
                </div>
            </div>
        </div>
    </section>
    <!------------------- End Breadcrumb----------------------->
    <!------------------------------------------------- Start Form Wizard page ------------------------------------------------->
    <section id="all-form">
        <div class="main">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 tabs-div">
                        <ul class="sid-menu">
                            @for($i=1; $i<=21; $i++)
                                <li class="@if($step == $i) active @endif"><a href="{{url("company-registration/step/$i")}}">{{trans('form.step')}} {{$i}}</a></li>
                            @endfor
                        </ul>
                    </div>
                    <div class="col-md-9 form-div">
                        <form method="POST" action='{{url("company-registration/update/$company->id")}}' id="signup-form" class="signup-form" enctype="multipart/form-data">
                            @csrf      
                            <input type="hidden" name="id" value="{{$company->id}}" />
                            @include("website.companiesPartials.step-$step")
                            <div class="form-row">
                                <button type="submit" class="btn submit-btn">{{trans('form.save_changes')}}</button>
                            </div>
                        </form>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!-------------------------------------------------- End  Form Wizard page ------------------------------------------------->  


    
    
    
@endsection
@section('script')
    <script src="{{url('resources/assets/front/wizard/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{url('resources/assets/front/wizard/vendor/jquery-validation/dist/jquery.validate.min.js')}}"></script>
    <script src="{{url('resources/assets/front/wizard/vendor/jquery-validation/dist/additional-methods.min.js')}}"></script>
    <script src="{{url('resources/assets/front/wizard/vendor/jquery-steps/jquery.steps.min.js')}}"></script>
    <script src="{{url('resources/assets/front/wizard/js/main-wizard.js')}}"></script>
@endsection 