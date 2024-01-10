@extends('layouts.app')
@section('meta')
    <title>{{app()->getLocale() == 'en' ? $service->name_en : $service->name_ar}}</title>
@endsection

@section('content')
    <!---------------------------------------Start  breadcrumb------------------------------------>
    <section class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-item">
                        <h2 class="title">{{app()->getLocale() == 'en' ? $service->name_en : $service->name_ar}}</h2>
                        <nav aria-label="breadcrumb">   
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('/')}}">{{trans('home.home')}}</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{app()->getLocale() == 'en' ? $service->name_en : $service->name_ar}}</li>
                            </ol>
                        </nav>
                    </div>  
                </div>
            </div>
        </div>
    </section>
    <!--------------------------------------End breadcrumb---------------------------------------->
    <!---------------------------------------Start  Single Product ------------------------------------>
    <section id="service-page">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-8 col-lg-8">
                    <div class="product-img">
                        <img src="{{url('uploads/services/source/' . $service->img)}}">
                    </div>
                    <div class="content">
                        <h3>{{app()->getLocale() == 'en' ? $service->name_en : $service->name_ar}}</h3>
                        <p>
                            {!! app()->getLocale() == 'en' ? $service->text_en : $service->text_ar !!}
                        </p>
                    </div>
                    @if (count($service->childs()) >0)
                        <div class="table-responsive-sm order-table"> 
                            <h3>{{trans('home.Sub Product')}}</h3>
                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col">{{trans('home.Product Name')}}</th>
                                    <th scope="col">{{trans('home.desc')}}</th>
                                    <th scope="col">{{trans('home.download')}}</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach ($service->childs() as $child)
                                        <tr>
                                            <th scope="row">{{app()->getLocale() == 'en' ? $child->name_en : $child->name_ar}}</th>
                                            <td>{!! app()->getLocale() == 'en' ? $child->text_en : $child->text_ar !!}</td>
                                            @if (!empty($child->cv))
                                            <td>
                                                <a href="{{url('uploads/services/source/' . $child->cv)}}" target="_blank" class="btn btn-primary">{{trans('home.download')}}</a>
                                            </td>
                                            @endif
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @endif
                
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4 sid">
                    <!----form---->
                    <div class="card request-quote-section">
                        <div class="card-body">
                            <h2>{{trans('home.Send Your Message')}}</h2>
                            <form method="post" action="{{route('saveContactUs')}}">
                                @csrf
                                <div class="form-group">
                                    <input type="text" name="name" placeholder="{{trans('home.name')}}" class="form-control" required="">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="email" placeholder="{{trans('home.email')}}" class="form-control" required="">
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" name="message" id="" cols="60" rows="5" placeholder="{{trans('home.message')}}" required=""></textarea>
                                </div>
                                <div class="pull-right">
                                    <button type="submit" class="btn theme-btn btn-style-one">
                                        {{trans('home.send')}}
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!----form---->
                    <div class="contact-item">
                        <div class="contact-links">
                            <h3>{{trans('home.contact-us')}}</h3>
                            <ul>
                                <li>
                                    <i class="fa fa-phone"></i>
                                    <span>{{trans('home.phone')}} :</span>
                                    <a href="tel:+2{{$setting->mobile}}">{{$setting->mobile}}</a>
                                </li>
                                <li>
                                    <i class="fa fa-phone"></i>
                                    <span>{{trans('home.phone')}} :</span>
                                    <a href="tel:+2{{$setting->mobile2}}">{{$setting->mobile2}}</a>
                                </li>
                                <li>
                                    <i class="fa fa-envelope"></i>
                                    <span>{{trans('home.email')}}:</span>
                                    <a href="mailto:{{$setting->email}}">{{$setting->email}}</a>
                                </li>
                                @foreach ($addresses as $address)
                                    <li>
                                        <i class="fa fa-map-marker"></i>
                                        <span>{{trans('home.address')}}:</span>
                                        <a href="{{$address->map_url}}">{{app()->getLocale() == 'en' ? $address->address_en : $address->address_ar}}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!---------------------------------------End  Single Product ------------------------------------>




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