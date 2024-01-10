@extends('layouts.app')
<title>{{(app()->getLocale() == 'en')?$scope->name_en:$scope->name_ar}}</title>
@section('content')

<section class="page-title" style="background-image: url({{url('uploads/homeImages/source/'.$coverImage)}});">
    <div class="auto-container">
        <div class="content-box">
            <div class="content-wrapper">
                <div class="title">
                    <h1>{{(app()->getLocale() == 'en')?$scope->name_en:$scope->name_ar}}</h1>
                </div>
                <ul class="bread-crumb style-two">
                    <li><a href="{{url('/')}}">{{trans('home.home')}} </a></li>
                    <li class="active">{{(app()->getLocale() == 'en')?$scope->name_en:$scope->name_ar}}</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<div class="service-details-page">
    <div class="auto-container">
        <div class="row">
            <div class="col-lg-8">
                <div class="service-details">
                    
                    <div class="image">
                        <img src="{{url('uploads/categories/source/'.$scope->image)}}" alt="{{($scope->alt_img)?$scope->alt_img:$scope->name_en.' image'}}">
                    </div>


                    <div class="text-block">
                        <h2>{{(app()->getLocale() == 'en')?$scope->name_en:$scope->name_ar}}</h2>
                        <div class="text">
                            {!! (app()->getLocale() == 'en')?$scope->desc_en:$scope->desc_ar !!}
                        </div>
                    </div>

                    <div class="request-callback-area">
                        <div class="contact-form">
                                                    <h3>{{trans('home.get_in_touch')}}</h3>

                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <form action="{{route('saveContactUs')}}" id="contact-form" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name">{{trans('home.name')}}</label>
                                            <input id="name" type="text" name="name" value="{{old('name')}}" placeholder="{{trans('home.name')}}" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="email">{{trans('home.email')}}</label>
                                            <input id="email" type="email" name="email" value="{{old('email')}}" placeholder="{{trans('home.email')}}" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="phone">{{trans('home.phone')}}</label>
                                            <input id="phone" type="number" min="0" name="phone" value="{{old('phone')}}" placeholder="{{trans('home.phone')}}" required>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="company">{{trans('home.company')}}</label>
                                            <input id="company" type="text" name="company" value="{{old('company')}}" placeholder="{{trans('home.company')}}" required>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="position">{{trans('home.position')}}</label>
                                            <input id="position" type="text" name="position" value="{{old('position')}}" placeholder="{{trans('home.position')}}" required>
                                        </div>
                                    
                                        <!--<div class="form-group">-->
                                        <!--    <label for="service">{{trans('home.services')}}</label>-->
                                        <!--    <select id="service" class="selectpicker" name="service">-->
                                        <!--        @foreach($services as $service)-->
                                        <!--            <option value="{{$service->name_en}}">{{(app()->getLocale() == 'en')?$service->name_en:$service->name_ar}}</option>-->
                                        <!--        @endforeach-->
                                        <!--    </select>-->
                                        <!--</div>  -->
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="message">{{trans('home.message')}}</label>
                                            <textarea id="message" name="message" placeholder="{{trans('home.message')}}">{{old('phone')}}</textarea>
                                        </div> 
                                        <div class="form-group-two">
                                            <div class="form-btn">
                                                <input type="hidden" name="recaptcha" id="recaptcha">
                                                <button class="theme-btn btn-style-one" type="submit" data-loading-text="Please wait..."><span>{{trans('home.send')}}</span></button>
                                            </div>
                                        </div>                       
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4">
                <aside class="service-sidebar">
                    <div class="widget category-widget">
                        <h2>{{trans('home.other_scopes')}}</h2>
                        <ul>
                            @foreach($scopes as $sco)
                                <li @if($scope->id == $sco->id) class="active" @endif>
                                    <a href="{{url('scope/'.$sco->id.'/details')}}">{{(app()->getLocale() == 'en')?$sco->name_en:$sco->name_ar}}<span class="icon-right-arrow1"></span></a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <!--<div class="brochure-widget widget">-->
                    <!--    <div class="widget-content">                                -->
                    <!--        <div class="single-brochure"><a href="#"><i class="flaticon-pdf-file-format-symbol"></i> Service Details.pdf</a></div>-->
                    <!--        <div class="single-brochure"><a href="#"><i class="flaticon-doc-file-format"></i>Company Reports.doc</a></div>-->
                    <!--    </div>-->
                    <!--</div>-->
                    <div class="widget feature-widget feature-block-two">
                        <div class="inner-box">
                            <div class="icon"><img src="{{url('resources/assets/front/images/icons/icon-6.png')}}" alt="icon image"></div>
                            <h4>{{trans('home.Looking for')}} <br> {{trans('home.a job apply now')}}</h4>
                            <div class="text">{{trans('home.Join our professional team')}}</div>
                            <div class="link-btn"><a href="{{url('/career')}}" class="theme-btn style-three"><span>{{trans('home.Apply Now')}}</span></a></div>
                        </div>
                    </div>
                </aside> 
            </div>
        </div>
    </div>
</div>

@endsection


@section('script')

    <script src="https://www.google.com/recaptcha/api.js?render={{ config('services.recaptcha.sitekey') }}"></script>
    <script>
         grecaptcha.ready(function() {
             grecaptcha.execute('{{ config('services.recaptcha.sitekey') }}', {action: 'contact'}).then(function(token) {
                if (token) {
                  document.getElementById('recaptcha').value = token;
                }
             });
         });
    </script>

    @if(Session::has('contact_message'))
        <script>
            $.alert({
                title: "{{trans('home.contact_us')}}",
                content: "{{Session::get('contact_message')}}",
                buttons: {
                    ok: {
                        text: "{{trans('home.OK')}}",
                        btnClass: 'btn main-btn',
                    },
                },
                columnClass: 'col-md-6'
            });
        </script>
    @endif
    @php
        Session::forget('contact_message')
    @endphp
@endsection  