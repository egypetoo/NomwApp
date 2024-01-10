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
                        <h2 class="title">{{trans('home.career')}}</h2>
                    </div>  
                </div>
            </div>
        </div>
    </section>
    <!------------------- End Breadcrumb----------------------->

    <!------------------------------------------------- Start Employee details page ------------------------------------------------->
    <section id="employee">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-4 right">
                    <div class="card text-end">
                        <div class="card-body">
                          <h5 class="card-title">{{trans('home.Job vacancies')}}</h5>
                          <p class="card-text">{{trans('home.CV can be sent by e-mail')}}</p>
                          <a href="mailto:{{$setting->contact_email}}" class="btn btn-primary">{{$setting->contact_email}}</a>
                          <p class="desc">{{trans('home.With the need to write the name of the job according to what is written in the table of current jobs in the subject field of the email, or write “CV” for other than the jobs offered.')}}</p>

                        </div>
                      </div>
                      
                </div>
                <div class="col-sm-12 col-md-6 col-lg-8 left">
                    <div class="desc-title">
                        <h4>{{trans('home.Thank you for your interest in working at Nomou Capital.')}}</h4>
                        <p>{{trans('home.We at Nomou Capital seek to employ distinguished national cadres who have a high level of professional ambition and give them the opportunity to build a promising future. Nomou Capital is committed to training and developing its employees through advanced programs to increase their knowledge, competencies and production capabilities. Nomou Capital also offers competitive salaries, allowances, bonuses and annual bonuses.')}}</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-12">
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
    </section>
    <!-------------------------------------------------- End  Employee details page ------------------------------------------------->
@endsection

@section('script')

    <script src="https://www.google.com/recaptcha/api.js?render={{ config('services.recaptcha.sitekey') }}"></script>
    <script>
         grecaptcha.ready(function() {
             grecaptcha.execute('{{ config('services.recaptcha.sitekey') }}', {action: 'contact'}).then(function(token) {
                if (token) {
                  document.getElementById('recaptcha').value = token;
                }
             });
         });
    </script>
    <script>
        $('form').submit(function() {
            $(this).find("button[type='submit']").prop('disabled',true);
        });
    </script>

    @if(Session::has('success'))
        <script>
            $.alert({
                title: "{{trans('home.applicationSentSuccessfully')}}",
                content: "{{Session::get('success')}}",
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
        Session::forget('success')
    @endphp
@endsection    