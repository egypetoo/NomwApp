@extends('layouts.app')
@section('meta')
    @php echo $metatags @endphp
    @php echo $schema @endphp
@endsection

@section('content')

    <!---------------------------------------Start  breadcrumb------------------------------------>
    <section class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-item">
                        <h2 class="title">{{trans('home.about us')}}</h2>
                        <nav aria-label="breadcrumb">   
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('/')}}">{{trans('home.home')}}</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{trans('home.about us')}}</li>
                            </ol>
                        </nav>
                    </div>  
                </div>
            </div>
        </div>
    </section>
    <!--------------------------------------End breadcrumb---------------------------------------->
    <!---------------------------------------Start  about Us------------------------------------>
    <section id="about-page">
        <div class="container">
            <h2 class="heading heading_space">{{trans('home.About Intra')}}<span class="divider-left"></span></h2>
            <div class="row">
                <div class="col-md-6">
                    <div class="section-title">
                        <h3> {{trans('home.Why Choose Us')}}</h3>
                        <p>{!! app()->getLocale() == "en" ? $about->text_en : $about->text_ar !!}</p>
                    </div>
                    @if (count($aboutStrucs) > 0)
                        <div class="about-description">
                            <ul class="row">
                                @foreach ($aboutStrucs as $aboutStruc)
                                    <li class="col-md-6">{{$aboutStruc->title}}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                </div>
                <div class="col-md-6">
                    <div class="about-video-item">
                        <div class="about-video-img"> <img src="{{url('uploads/aboutStrucs/source/' . $about->image)}}" alt=""> 
                            <a href="{{$about->youtube_link}}" class="video-play mfp-iframe xs-video">
                                <i class="fa fa-play"></i>
                            </a> 
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-12 middle">
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-5">
                                <div class="card-img">
                                    <img src="{{url('resources/assets/front/images/about/p14.webp')}}" class="img-fluid rounded-start" alt="...">
                                </div>
                                
                            </div>
                            <div class="col-md-7 all">
                                <div class="card-body">
                                <h5 class="card-title">{{trans('home.Intra')}}</h5>
                                <p class="card-text">Intra Chemicals is using technical and commercial experience of the
                                    well-trained staff in a combination with a clear vision of the market
                                    needs, to occupy a position of the main raw material supplier in the
                                    pharmaceuticals, food, oil & gas industry, ceramic, agriculture
                                    chemicals and fertilizers and other production sectors on the market
                                    of African countries and Middle East.
                                </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @if (count($aboutValues) > 0)
                    <div class="sec-middle">
                        <div class="header-title">
                            <h3 class="main-title">{{trans('home.Our Philosophy')}}</h3>
                            <p class="sub-title">{{trans('home.To ensure Quality, Health, Safety and Environment is our first consideration during all business activities.')}}</p>
                        
                        </div>
                        <div class="row">
                            @foreach ($aboutValues as $aboutValue)
                                <div class="col-sm-12 col-md-6 col-lg-4">
                                    <div class="card">
                                        <div class="card-img">
                                            <img src="{{url('uploads/aboutValues/source/' . $aboutValue->image)}}">
                                        </div>
                                        <div class="card-body">
                                            <h5>{{app()->getLocale() == "en" ? $aboutValue->name_en : $aboutValue->name_ar}}</h5>
                                            <p>{!! app()->getLocale() == "en" ? $aboutValue->text_en : $aboutValue->text_ar !!}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endif


                    <!--<div class="col-sm-12 col-md-12 col-lg-12 bottom">-->
                    <!--  <h3>About History</h3>-->
                    <!--  <div class="boxblulight">-->
                    <!--      <img src="assets/images/about/medicine-cabniet-1536x1024.webp" alt="">-->
                    <!--      <p>-->
                    <!--        Intra Chemicals (Chemicals & Ingredients) is internationally active in-->
                    <!--        the market of industrial minerals with a leading position within a-->
                    <!--        number of product applications.-->
                    <!--        The Company supplies thousands of tons annually to a worldwide-->
                    <!--        market. -->
                    <!--        </p>-->
                    <!--        <p>-->
                    <!--        We closely cooperate with mining and producers companies of South-->
                    <!--        Africa, India, Australia, Mexico, Brazil, the USA, Germany, Spain, France,-->
                    <!--        Philippines & others, that constantly increases the range of products-->
                    <!--        we supply to African countries and Middle East markets.-->
                    <!--        The qualified specialists of our Company have been working in the-->
                    <!--        mineral business for more than 15 years.        -->
                    <!--      </p>-->
                    <!--  </div>-->
                    <!--</div>-->

            </div>
            <!--row end--> 
        </div>
    
    </section>
    <!---------------------------------------End  about Us------------------------------------>


@endsection
