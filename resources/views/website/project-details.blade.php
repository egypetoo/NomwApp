@extends('layouts.app')
@section('meta')
    @php echo $metatags @endphp

    @php echo $schema @endphp
@endsection
@section('style')
    <style>
            .card-body{
            margin-bottom: 60px;
        }
    </style>

@endsection

@section('content')
    <!-------------------Breadcrumb----------------------->
    <section class="breadcrumb-area about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-item">
                        <h2 class="title">{{app()->getLocale() == 'en' ? $project->name_en : $project->name_ar}}</h2>
                    </div>  
                </div>
            </div>
        </div>
    </section>
    <!------------------- End Breadcrumb----------------------->
    <!-- service details page -->
    <div class="service-details-page inside">
        <div class="page-body">
            <div class="mfa-container">
                <div class="right-left-wrapper">
                    <div class="left-wrapper">
                        <ul class="services-ul">
                            @foreach ($projects as $projectOne)
                                <li>
                                    <a @if(Request::segment(1) == $projectOne->link)class="active"@endif href="{{route('checkUrl', $projectOne->link)}}">
                                        {{app()->getLocale() == 'en' ? $projectOne->name_en : $projectOne->name_ar}}                   
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="right-wrapper">
                        <div class="service-text">
                            <div class="breif-section">
                                <p>
									{!! app()->getLocale() == 'en' ? $project->text_en : $project->text_ar !!}
                                </p>
                            </div>
                        </div>
						
					@if(Request::segment(1) == 'Management-team')
						<!-- Button trigger modal -->
						<div class="row">
							@foreach($members as $member)
								<div class="col-md-3">
									<div class="box-member text-center" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal{{$member->id}}">
										<div class="img">
											<img class="img-fluid img-thumbnail-post" src="@if(!empty($member->image) ){{url('uploads/galleryVideos/source/' . $member->image)}} @else {{url('uploads/galleryVideos/no_image.png')}} @endif" alt="" data-pagespeed-url-hash="972019777">
										</div>
										<div class="content-member">
											<h3><strong><span style="color: rgb(0, 0, 0); font-size: 12pt;">{{app()->getLocale() == 'en' ? $member->name_en : $member->name_ar}}</span></strong></h3>
											<div class="title">
												<span style="color: rgb(0, 0, 0);">{{app()->getLocale() == 'en' ? $member->position_en : $member->position_ar}}</span>
											</div>
										</div>
									</div>
								</div>
							@endforeach
						</div>
					@endif

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

		<!--<a type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"></a> -->





		@foreach($members as $member)
		<!-- Modal -->
		<div class="modal fade " id="exampleModal{{$member->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
			  <div class="modal-content">
				  <div class="modal-body p-5 position-relative"> 
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>					  
					  <div class="row">
						  <div class="col-md-4"> 
							  <img class="img-fluid img-thumbnail-post" src="@if(!empty($member->image)) {{url('uploads/galleryVideos/source/' . $member->image)}} @else {{url('uploads/galleryVideos/no_image.png')}} @endif" alt="" data-pagespeed-url-hash="972019777">
						  </div>
						  <div class="col-md-8">
							  <div class="title">{{app()->getLocale() == 'en' ? $member->name_en : $member->name_ar}}</div>
							  <div class="job-title">{{app()->getLocale() == 'en' ? $member->position_en : $member->position_ar}} 
							  </div>
							  <div class="content-modal-member">
							  <p>{!! app()->getLocale() == 'en' ? $member->text_en : $member->text_ar !!}
							  </p> 
							  </div>
						  </div>
					  </div>
				  </div>
				</div>
			</div>
		  </div>
		</div>
	@endforeach

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