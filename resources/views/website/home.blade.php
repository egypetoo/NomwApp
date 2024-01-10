@extends('layouts.app')

@section('meta')
    @php echo $metatags @endphp

    @php echo $schema @endphp
@endsection

@section('content')
    @if(count($sliders) > 0)
        <!-- main slider seciton -->
        <div class="main-slider-section">
            <!-- start home main slider -->
            <div class="slider-wrapper">
                <div class="swiper-container home-main-slider">
                    <div class="swiper-wrapper">
                        @foreach ($sliders as $slider)
                            <div class="swiper-slide">
                                <div class="slider-img">
                                    <img src="{{url('uploads/sliders/home-sliders/source/' . $slider->image)}}" alt="img" />
                                </div>
                                <div class="slider-text">
                                    <h3 class="main-heading">
                                       {{$slider->title}}
                                    </h3>
                                    <p class="sub-heading">
                                        {!! $slider->text !!}
                                    </p>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <!-- rtl code -->
                    <!-- <div class="swiper-button-prev home-main-slider-prev">
                        <span class="feather icon-chevron-right"></span>
                    </div>
                    <div class="swiper-button-next home-main-slider-next">
                        <span class="feather icon-chevron-left"></span>
                    </div> -->
                    <!-- rtl code -->

                    <!-- ltr code -->
                    <div class="swiper-button-next home-main-slider-next">
                        <span class="fontello icon-right-open-mini"></span>
                    </div>
                    <div class="swiper-button-prev home-main-slider-prev">
                        <span class="fontello icon-left-open-mini"></span>
                    </div>
                    <!-- ltr code -->

                    <div class="swiper-pagination home-main-slider-pagination"></div>
                </div>
            </div>
            <!-- end home main slider -->
        </div>
        <!-- ./main slider seciton -->
    @endif

    <!--====== service Section Start ======-->
    @if(count($services) > 0)
    <!--------------------------Start Product------------------------------->
        <!-- services section -->
        <div class="services-section">
            <div class="section-heading mfa-container">
                <p class="mini-title">
                    {{trans('home.whyGrowCapital')}}
                </p>
                <p class="main-title">
                   {{trans('home.Diverse service offerings, one vision')}}
                </p>
            </div>

            <div class=" mfa-container">
                <div class="section-body">
                    <ul class="main-section-ul">
                        @foreach ($services as $oneServ)
                            <li>
                                <a class="service-card" href="{{route('checkUrl', $oneServ->link)}}">
                                    <div class="service-img">
                                        <img src="{{url('uploads/services/source/' . $oneServ->img)}}" alt="img">
                                    </div>
                                    <div class="service-text">
                                        <p class="service-title">
                                            {{app()->getLocale() == 'en' ? $oneServ->name_en : $oneServ->name_ar}}
                                        </p>
                                        <div class="service-desc">
                                            <p>
                                               <!--{!!(app()->getLocale() == 'en')?strip_tags(mb_strimwidth($oneServ->text_en, 0, 150, "...")) : strip_tags(mb_strimwidth($oneServ->text_ar, 0, 150, "..."))!!}-->
												{!!(app()->getLocale() == 'en')? $oneServ->summary_en : $oneServ->summary_ar !!}
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
        <!-- ./ services section -->
    <!--------------------------End Product------------------------------->
    @endif
    <!--====== service Section End ======-->
    @if (count($blogs) > 0)
        <!-- blogs section -->
        <div class="blogs-section">
            <div class="mfa-container">
                <div class="section-heading">
                    <p>
                        {{trans('home.grow-news')}}
                    </p>
                    
                    <a href="{{url('/blogs')}}" class="section-link">
                        {{trans('home.showAll')}}
                        <i class="fontello icon-forward-outline"></i>
                    </a>
                </div>

            <div class=" mfa-container">
                <div class="section-body">
                    <ul class="main-section-ul">
                        @foreach ($blogs as $blog)
                            <li>
                                <a class="service-card" href="{{route('checkUrl', $blog->link)}}">
                                    <div class="service-img">
                                        <img src="{{url('uploads/blogitems/source/' . $blog->image)}}" alt="img">
                                    </div>
                                    <div class="service-text">
                                        <p class="service-title">
                                            {{app()->getLocale() == 'en' ? $blog->title_en : $blog->title_ar}}
                                        </p>
                                        <div class="service-desc">
                                            <p>
                                                {!!(app()->getLocale() == 'en')?strip_tags(mb_strimwidth($blog->text_en, 0, 200, "...")) : strip_tags(mb_strimwidth($blog->text_ar, 0, 200, "..."))!!}
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
        <!-- ./blogs section -->
    @endif
    <!-- home about section -->
    <div class="home-about-section">
        <div class="mfa-container">
            <div class="section-wrapper">
                <div class="section-text">
                    <p class="section-title">
                        {{trans('home.grow in numbers')}}
                    </p>

                    <ul class="reset-ul ul-number">
                        @foreach ($aboutValues as $aboutValue)
                            <li>
                                <span class="text align-self-center">{{app()->getLocale() == 'en' ? $aboutValue->name_en : $aboutValue->name_ar}}</span>
                                <span class="number align-self-center ">{{app()->getLocale() == 'en' ? $aboutValue->text_en : $aboutValue->text_ar}}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>
            
                <div class="section-img">
                <img src="{{url('resources/assets/front/images/about/about-2.png')}}" alt="img">
                </div> 
                <div class="section-img-2">
                <img src="{{app()->getLocale() == 'en' ? url('resources/assets/front/images/about/about-img-en.jpg') : url('resources/assets/front/images/about/about-img.png')}}" alt="img">
                </div>
            
            </div>
        </div>
    </div>
    <!-- ./home about section -->

@endsection

@section('script')

    <script type="text/javascript">
        function form_submit() {
            document.getElementById("saveForm").submit();
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