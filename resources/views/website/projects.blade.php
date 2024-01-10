@extends('layouts.app')

@section('meta')
    <title>{{trans('home.about-us-grow')}}</title>
    @php echo $metatags @endphp

@endsection

@section('content')
    <!-------------------Breadcrumb----------------------->
    <section class="breadcrumb-area about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-item">
                        <h2 class="title">{{trans('home.about-us-grow')}}</h2>
                    </div>  
                </div>
            </div>
        </div>
    </section>
    <!------------------- End Breadcrumb----------------------->
    <!-- service details page -->
    <div class="service-details-page about">
        <div class="page-body">
            <div class="mfa-container">
                <div class="right-left-wrapper">
                    <div class="left-wrapper">
                        <ul class="services-ul">
                            @foreach ($projects as $project)
                                <li>
                                    <a  @if(Request::segment(1) == $project->link)class="active"@endif href="{{route('checkUrl', $project->link)}}">
                                        {{app()->getLocale() == 'en' ? $project->name_en : $project->name_ar}}                   
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="right-wrapper">
                        <div class="service-text">
                            <div class="breif-section">
                                <h5 class="about-title">{{app()->getLocale() == 'en' ? $about->title_en : $about->title_ar}}</h5>
                                <p>{!! app()->getLocale() == 'en' ? $about->text_en : $about->text_ar !!}</p>
                            </div>
                        </div>
                            <div class="blogs-section">
                                <div class="mfa-container">
                                    <div class=" mfa-container">
                                        <div class="section-body">
                                            <ul class="main-section-ul">
                                                @foreach ($aboutStrucs as $aboutStruc)
                                                    <li>
                                                        <a class="service-card" href="#">
                                                            <div class="service-img">
                                                                <h5>{{$aboutStruc->title}}</h5> 
                                                            </div>
                                                            <div class="service-text">
                                                                <div class="service-desc">
                                                                    <p>
                                                                        {!! $aboutStruc->text !!}
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                
                                </div>
                            </div>
                        <div class="social-sec">
                            <div class="d-inline-block pr-4 left">{{trans('home.Share on social networks')}}</div>
                            <div class="d-inline-block pr-4 float-right">
                                <ul>
                                @if (!empty($setting->whatsapp))
                                    <li><a href="https://wa.me/{{$setting->whatsapp}}"><i class="fontello icon-whatsapp"></i></a></li>
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