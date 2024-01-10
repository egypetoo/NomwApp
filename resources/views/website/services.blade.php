@extends('layouts.app')
@section('meta')
    @php echo $metatags @endphp
@endsection

@section('content')
    <!---------------------------------------Start  breadcrumb------------------------------------>
    <section class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-item">
                        <h2 class="title">{{trans('home.services')}}</h2>
                        <nav aria-label="breadcrumb">   
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('/')}}">{{trans('home.home')}}</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{trans('home.services')}}</li>
                            </ol>
                        </nav>
                    </div>  
                </div>
            </div>
        </div>
    </section>
    <!--------------------------------------End breadcrumb---------------------------------------->
    <!--====== service Section Start ======-->
    @if(count($services) > 0)
    <!--------------------------Start Product------------------------------->
    <section id="product">
        <div class="container clearfix">
            <div class="row">
                @foreach ($services as $service)
                    <div class="element clearfix col-sm-12 col-md-6 col-lg-4 home travel">
                        <a href="{{route('checkUrl', $service->link)}}" data-title="Image Title" class="transition-link"> 
                            <img src="{{url('uploads/services/source/' . $service->img)}}" alt="">
                            <div class="title-holder">
                                <h3>{{app()->getLocale() == 'en' ? $service->name_en : $service->name_ar}}</h3>
                                <p class="large">{{app()->getLocale() == 'en' ? $service->name_en : $service->name_ar}}</p>
                            </div>
                            <div class="overlay"></div>
                        </a> 
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!--------------------------End Product------------------------------->
    @endif
@endsection    