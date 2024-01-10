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
                            <h2 class="title">{{app()->getLocale() == 'en' ? $service->name_en : $service->name_ar}}</h2>
                        </div>  
                    </div>
                </div>
            </div>
        </section>
        <!------------------- End Breadcrumb----------------------->
         <!-- service details page -->
  <div class="service-details-page">
    <div class="page-body">
      <div class="mfa-container">
        <div class="right-left-wrapper">
            <div class="left-wrapper">
                <ul class="services-ul">
                    @foreach ($services as $oneService)
                    <li>
                        <a  @if(Request::segment(1) == $oneService->link)class="active"@endif href="{{route('checkUrl', $oneService->link)}}">
                            {{app()->getLocale() == 'en' ? $oneService->name_en : $oneService->name_ar}}                   
                        </a>
                    </li>
                @endforeach
                </ul>
              </div>
              <div class="right-wrapper">
                <div class="service-text">
                    <div class="breif-section">
                        <p>
                            {!! app()->getLocale() == 'en' ? $service->text_en : $service->text_ar !!}                   
                        </p>
                    </div>
                </div>

                <div class="social-sec">
                    <div class="d-inline-block pr-4 left">{{trans('home.Share on social networks')}}</div>
                    <div class="d-inline-block pr-4 float-right">
                        <ul>
                        @if (!empty($setting->whatsapp))
                            <li><a href="https://wa.me/{{$setting->whatsapp}}"><i class="fontello icon-whatsapp" style="color: #403e1d"></i></a></li>
                        @endif
                        @if (!empty($setting->twitter))
                            <li><a href="{{$setting->twitter}}"><i class="fontello icon-twitter-1"></i></a></li>
                        @endif
                        @if (!empty($setting->facebook))
                            <li><a href="{{$setting->facebook}}"><i class="fontello icon-facebook-1"></i></a></li>
                        @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ./service details page -->




@endsection

@section('script')


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