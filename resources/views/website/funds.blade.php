@extends('layouts.app')
@section('meta')
	<title>{{trans('home.real_estate_funds')}}</title>
@endsection

@section('content')

    <!-------------------Breadcrumb----------------------->
    <section class="breadcrumb-area about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-item">
                        <h2 class="title">{{trans('home.real_estate_funds')}}</h2>
                    </div>  
                </div>
            </div>
        </div>
    </section>
    <!------------------- End Breadcrumb----------------------->
<section id="funds">
	<div class="container">
		<div class="row">
			@foreach($funds as $fund)
			<div class="col-sm-12 col-md-6 col-lg-3">
					<div class="service-card">
						<div class="service-img">
							<img src="{{url('uploads/funds/source/' . $fund->image)}}" alt="img">
						</div>
						<div class="service-text">
							<h5 class="service-title">
								{{app()->getLocale() == 'en' ? $fund->name_en : $fund->name_ar}}
							</h5>
							<div class="service-desc">
								<p>
									{!!(app()->getLocale() == 'en')?strip_tags(mb_strimwidth($fund->text_en, 0, 50, "...")) : strip_tags(mb_strimwidth($fund->text_ar, 0, 50, "..."))!!}
								</p>
							</div>
							<div class="service-link">
								<a href="{{route('checkUrl', $fund->link)}}">
									{{trans('home.more')}}
								</a>
							</div>
						</div>
					</div>
			</div>
			@endforeach
				<div class="col-sm-12 col-md-12 col-lg-12">
					<nav aria-label="Page navigation example">
					  <ul class="pagination">
						<li class="page-item">
						  {{ $funds->links() }}
						</li>
					  </ul>
					</nav>
				</div>
		</div>
	</div>
</section>
@endsection
