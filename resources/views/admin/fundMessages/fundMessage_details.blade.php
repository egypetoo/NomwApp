@extends('layouts.admin')
@section('meta')
    <title>{{trans('home.fundMessage')}}</title>
@endsection
@section('content')

<div class="container-fluid">

        <!-- Page Header -->
        <div class="page-header">
            <div>
                <h2 class="main-content-title tx-24 mg-b-5">{{trans('home.fundMessages')}}</h2>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/admin')}}">{{trans('home.admin')}}</a></li>
                    <li class="breadcrumb-item"><a href="{{url('admin/fundMessages')}}">{{trans('home.fundMessages')}}</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{trans('home.fundMessage')}}</li>
                </ol>
            </div>
        </div>
        <!-- End Page Header -->

        <!-- Row-->
        <div class="row">

            <div class="ol-sm-12 col-xl-12 col-lg-12">
				<div class="card custom-card">
					<div class="">
						<div class="main-content-body main-content-body-contacts">
							<div class="main-contact-info-header pt-3">
								<div class="media">
									<div class="main-img-user">
										<img alt="avatar" src="{{url('resources/assets/back/img/users/1.jpg')}}">
									</div>
									<div class="media-body">
										<h4>{{$fundMessage->name}}</h4>
									</div>
								</div>
							</div>
							<div class="main-contact-info-body">
								<div>
									<h6>{{trans('home.id_type')}}</h6>
									<p>{{$fundMessage->id_type}}</p>
								</div>
								<div class="media-list">
									<div class="media">
										<div class="media-body">
											<div>
												<label>{{trans('home.id_num')}}</label> <span class="tx-medium">{{$fundMessage->id_num}}</span>
											</div>
											<div>
												<label>{{trans('home.Subscription_type')}}</label> <span class="tx-medium">{{$fundMessage->subscription_type}}</span>
											</div>
											
											<div>
												<label>{{trans('home.number of units')}} {{trans('home.Digital')}}</label> <span class="tx-medium">{{$fundMessage->number_of_units_digital}}</span>
											</div>
											<div>
												<label>{{trans('home.number of units')}} {{trans('home.writing')}}</label> <span class="tx-medium">{{$fundMessage->number_of_units_writing}}</span>
											</div>
										</div>
									</div>
								</div>
								<div class="media-list">
									<div class="media">
										<div class="media-body">
											<div>
												<label>{{trans('home.The_subscription_fee_is_in_Saudi_riyals')}} {{trans('home.Digital')}}</label> <span class="tx-medium">{{$fundMessage->The_subscription_fee_is_in_Saudi_riyals_digital}}</span>
											</div>
											<div>
												<label>{{trans('home.The_subscription_fee_is_in_Saudi_riyals')}} {{trans('home.writing')}}</label> <span class="tx-medium">{{$fundMessage->The_subscription_fee_is_in_Saudi_riyals_writing}}</span>
											</div>
											
											<div>
												<label>{{trans('home.paid amount')}} {{trans('home.Digital')}}</label> <span class="tx-medium">{{$fundMessage->paid_amount_digital}}</span>
											</div>
											<div>
												<label>{{trans('home.paid amount')}} {{trans('home.writing')}}</label> <span class="tx-medium">{{$fundMessage->paid_amount_writing}}</span>
											</div>
										</div>
									</div>
								</div>
								<div class="media-list">
									<div class="media">
										<div class="media-body">
											<div>
												<label>{{trans('home.client_name')}}</label> <span class="tx-medium">{{$fundMessage->client_name}}</span>
											</div>
											
											<div>
												<label>{{trans('home.date')}}</label> <span class="tx-medium">{{$fundMessage->date}}</span>
											</div>
											@if(! empty($fundMessage->client_signature))
												<div>
													<img src="{{url('uploads/fundSignatures/source/' . $fundMessage->client_signature)}}">
												</div>
											@endif
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
        </div>
        <!-- End Row -->
    </div>

@endsection
