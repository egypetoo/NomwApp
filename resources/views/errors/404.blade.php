@extends('layouts.app') 
    <title>404 {{trans('home.page_not_found')}}</title>
@section('content')

<section class="breadcrumb-area about">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-item">
                    <h2 class="title">404 {{trans('home.page_not_found')}}</h2>
                </div>  
            </div>
        </div>
    </div>
  </section>

<section id="errors">
     <div class="text-center">
        <img src="{{url('resources/assets/front/images/404.png')}}" width="600px" height="600px"/>
    </div>
    <div class="text-center">
        <a href="{{url('/')}}" class="btn btn-primary" style="color: #fff; background-color: #403e1d; border-color: #403e1d; margin-bottom: 15px; border-radius: 20px; padding: 10px 20px;">{{trans('home.go_home')}}</a>
    </div>
    
</section>
@endsection