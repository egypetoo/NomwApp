@extends('layouts.app')
@section('meta')
    @php echo $metatags @endphp
@endsection

@section('content')
  <!-------------------Breadcrumb----------------------->
  <section class="breadcrumb-area about">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-item">
                    <h2 class="title">{{trans('home.blogs')}}</h2>
                </div>  
            </div>
        </div>
    </div>
  </section>
  <!------------------- End Breadcrumb----------------------->
    @if (count($blogs) > 0)
    <!-- blogs section -->
    <div class="blogs-section">
        <div class="mfa-container">

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
    <!--====== Latest Blog End ======-->

@endsection