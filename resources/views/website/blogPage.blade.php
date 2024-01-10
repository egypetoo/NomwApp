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
                        <h2 class="title">{{app()->getLocale() == 'en' ? $blog->title_en : $blog->title_ar}}</h2>
                    </div>  
                </div>
            </div>
        </div>
    </section>
    <!------------------- End Breadcrumb----------------------->
    <!---------------------------------------------------------Start Media Center-------------------------------------------------->
    <section id="media">
        <div class="container">
            <div class="row">
                <!-------------------------------------------- Start Top----------------------------------------------->
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <div class="card">
                        <div class="card-img">
                            <img src="{{url('uploads/blogitems/source/' . $blog->image)}}" alt="img">
                        </div>
                        <div class="card-body">
                            <h5>{{app()->getLocale() == 'en' ? $blog->title_en : $blog->title_ar}}</h5>
                            <p>{!! app()->getLocale() == 'en' ? $blog->text_en : $blog->text_ar !!}</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <!-- blogs section -->
                    <div class="blogs-section">
                        <div class="mfa-container">
                        <div class=" mfa-container">
                            <div class="section-body">
                                <ul class="main-section-ul">
                                    @foreach ($sideBlogs as $sideBlog)
                                        <li>
                                            <a class="service-card" href="{{route('checkUrl', $sideBlog->link)}}">
                                                <div class="service-img">
                                                <img src="{{url('uploads/blogitems/source/' . $sideBlog->image)}}" alt="img">
                                                </div>
                                                <div class="service-text">
                                                <p class="service-title">
                                                    {{app()->getLocale() == 'en' ? $sideBlog->title_en : $sideBlog->title_ar}}
                                                </p>
                                                <div class="service-desc">
                                                    <p>
                                                        {!!(app()->getLocale() == 'en')?strip_tags(mb_strimwidth($sideBlog->text_en, 0, 100, "...")) : strip_tags(mb_strimwidth($sideBlog->text_ar, 0, 100, "..."))!!}
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
                </div>
                <!-------------------------------------------- End  Top----------------------------------------------->
                <!-------------------------------------------- Start bottom----------------------------------------------->
                <div class="col-sm-12 col-md-12 col-lg-12 bottom">
                    <h5>الاخبار</h5>
                    <div class="row">
                        @foreach ($footerBlogs as $footerBlog)
                            <div class="col-sm-12 col-md-6 col-lg-3">
                                <a href="{{route('checkUrl', $footerBlog->link)}}">
                                    <div class="card">
                                        <div class="card-img">
                                            <img src="{{url('uploads/blogitems/source/' . $footerBlog->image)}}" alt="img">
                                        </div>
                                        <div class="card-body">
                                            <h5><a href="{{route('checkUrl', $footerBlog->link)}}">{{app()->getLocale() == 'en' ? $footerBlog->title_en : $footerBlog->title_ar}}</a></h5>
                                            <p>{!!(app()->getLocale() == 'en')?strip_tags(mb_strimwidth($footerBlog->text_en, 0, 100, "...")) : strip_tags(mb_strimwidth($footerBlog->text_ar, 0, 100, "..."))!!}</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
                <!--------------------------------------------  End bottom ----------------------------------------------->
            </div>
        </div>
    </section>
    <!--------------------------------------------------------- End  Media Center-------------------------------------------------->


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