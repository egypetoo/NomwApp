@extends('layouts.app')
@section('meta')
    @php echo $metatags @endphp

    @php echo $schema @endphp
@endsection
@section('content')
    <!-------------------Breadcrumb----------------------->
    <section class="breadcrumb-area about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-item">
                        <h2 class="title">{{trans('home.contact-us')}}</h2>
                    </div>  
                </div>
            </div>
        </div>
    </section>
    <!------------------- End Breadcrumb----------------------->
    <!------------------------------Start Contact------------------------------>
    <div class="service-details-page">
        <div class="page-body">
          <div class="mfa-container">
          
            
              <div class="right-wrapper">
               
               
                <!-- start jobs page -->
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12 top-head">
                        <h4>{{trans('home.To communicate, you can contact her through the form or the communication methods described')}}</h4>
                    </div>
                    <div class="col-md-6">
                        <div class="jobs-page">                                
                            <div class="page-body">
                                <div class="mfa-container">
                                    <form action="{{route('saveContactUs')}}" method="post" class="job-form row" data-aos="zoom-in-up" data-aos-duration="1500">
                                        @csrf
                                        <h3 class="mb-3">{{trans('home.Communication form')}}</h3>
                                        <div class="form-div col-md-6">
                                            <input type="text" name="name" id="name" placeholder="{{trans('home.Full Name')}}">
                            
                                        </div>
                                        <div class="form-div col-md-6">
                                            <input type="email" name="email" id="email" placeholder="{{trans('home.email')}}">
                            
                                        </div>
                                        <div class="form-div col-md-12">
                                            <input type="text" name="phone" id="phone" placeholder="{{trans('home.phone')}}">
                            
                                        </div>
                                        <div class="form-div col-md-12">
                                            <textarea name="message" id="coverLetter" placeholder="{{trans('home.How can we help you ?')}}"></textarea>
                                        </div>
                                        <div class="form-div">
                                            <button type=" submit">
                                                <span>
                                                    {{trans('home.send')}}
                                                </span>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <footer class="sid">
                            <div class="top-footer-wrapper">
                            <div class="section-three">                 
                                <div class="section-body">
                                    <!--<h5>{{trans('home.Financial grow company for financial consulting')}}</h5>-->
                                    <ul class="main-section-ul">
                                        <li>
                                            {!! $configration->about_app !!}
                                        </li>
                                        <li>                 
                                            {{$configration->address1}}
                                        </li>
                                    </ul>
                                </div>
                                </div>
                                <div class="section-four">
                                    <p class="section-heading">
                                        {{trans('home.For complaints and suggestions')}}
                                    </p>
                                <div class="section-body">
                                    <div class="phone-location">
                                        <ul class="phones-locations-ul">
											@if(! empty($setting->mobile))
												<li>
													<a class="phone-link" href="tel:{{$setting->mobile}}">
														<span>
															<i class="fontello icon-mobile"></i>
															{{$setting->mobile}}
														</span>
													</a>

												</li>
											@endif
											@if(! empty($setting->email))
												<li>
													<a class="phone-link" href="mailto:{{$setting->email}}">
														<span>
															<i class="fontello icon-mail"></i>
														{{$setting->email}}
														</span>
													</a>

												</li>
											@endif
											@if(! empty($setting->whatsapp))
												<li>
													<a class="location-div" href="https://wa.me/{{$setting->whatsapp}}">
													<i class="fontello icon-whatsapp"></i>
														{{$setting->whatsapp}} 
													</a>
												</li>
											@endif
											@if(! empty($setting->linkedin))
												<li>
													<a class="location-div" href="{{$setting->linkedin}}">
														<i class="fontello icon-linkedin-1"></i>
														{{trans('home.follow us on linkedin')}}
													</a>
												</li>
											@endif
											@if(! empty($about->pdf))
												<li>
													<a class="location-div" target="_blank" href="{{url('uploads/aboutStrucs/source/' . $about->pdf)}}">
														<!--<i class="fontello icon-linkedin-1"></i>-->
														{{trans('home.Customer guide to complaints')}}
													</a>
												</li>
											@endif
                                            
                                        </ul>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </footer> 
                    </div>
                </div>
              </div>
    
          </div>
        </div>
      </div>
                
    <!------------------------------End Contact------------------------------>
@endsection

@section('script')
    <script>
        function initMap() {
        var uluru = {lat: {{$setting->lat}}, lng: {{$setting->lng}} };
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 16,
            center: uluru
        });
        var marker = new google.maps.Marker({
            position: uluru,
            map: map
        });
        }  
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