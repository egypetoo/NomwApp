<!DOCTYPE html>
<html lang="{{app()->getLocale()}}">
    <head>
        <meta charset="utf-8">
        <meta name='viewport' content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <meta name="csrf-token" content="{{ csrf_token() }}">

         @yield('meta')
        <!-- favicons Icons -->
        <link rel="icon" href="{{url('uploads/settings/source/'.$configration->app_logo)}}">
        <link rel="shortcut icon" href="{{url('uploads/settings/source/'.$configration->app_logo)}}" type="image/png" sizes="16x16 32x32">
        <!-- Stylesheets -->
        <link rel="stylesheet" href="{{url('resources/assets/front/css/fontello.css')}}">
        <link rel="stylesheet" href="{{url('resources/assets/front/css/arrows.css')}}">
        <link rel="stylesheet" href="{{url('resources/assets/front/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{url('resources/assets/front/css/swiper.min.css')}}" />
        <link rel="stylesheet" href="{{url('resources/assets/front/css/fotorama.css')}}" />
        <link rel="stylesheet" href="{{url('resources/assets/front/css/lightgallery.css')}}" />
        <link rel="stylesheet" href="{{url('resources/assets/front/css/aos.css')}}" />
        <link rel="stylesheet" href="{{url('resources/assets/front/css/hamburgers.css')}}" />
        <link rel="stylesheet" href="{{url('resources/assets/front/css/bootstrap-datetimepicker.css')}}" />
        <link rel="stylesheet" href="{{url('resources/assets/front/css/index_ar.css')}}" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">

        @if (app()->getLocale() == 'en')
            <link rel="stylesheet" href="{{url('resources/assets/front/css/index.css')}}" />
        @endif
        @yield('style')
    </head>
    
    <body class="toggle-body-overflowY">
		
		<!----------------------------------------- Alert ----------------------------------------->
		<div class="alert alert-warning alert-dismissible fade show" role="alert">
			<div class="container">
				<div class="alert-body">
					<h3>{{app()->getLocale() == 'en' ? $setting->alert_name_en : $setting->alert_name_ar }}</h3>
					<p class="mb-2">{!! app()->getLocale() == 'en' ? $setting->alert_text_en : $setting->alert_text_ar !!}</p>					
					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>
			</div>
		</div>
		<!----------------------------------------- Alert ----------------------------------------->
		
        <div class="loading-div">
                <!--<img src="./images/icons/preloader.gif" alt="img" />-->
                <!-- Preloader -->
                <div class="loader-wrap">
                    <div class="preloader">
                        <div class="preloader-close">x</div>
                        <div id="handle-preloader" class="handle-preloader">
                            <div class="animation-preloader">
                                <div class="spinner">
                                </div>
                                <img src="{{url('resources/assets/front/images/logo/logo.png')}}">
            
                                <div class="txt-loading">
                                    <span data-text-preloader="{{trans('home.نمو')}}" class="letters-loading">
                                        {{trans('home.نمو')}}
                                    </span>
                                    <span data-text-preloader="&nbsp;" class="letters-loading">&nbsp;	</span>
                                    <span data-text-preloader="{{trans('home.كابيتال')}}" class="letters-loading">
                                        {{trans('home.كابيتال')}}
                                    </span>
                                
                                    
                                </div>
                            </div>  
                        </div>
                    </div>
                </div>
                <!-- Preloader End -->
                
        </div>
        <!-- <body> -->
		

        <!-- start header -->
        <div class="header-md">
            <div class="logo-lines">
                <div class="mfa-container">
                    <div class="block-wrapper">
                        <div class="lines hamburger hamburger--elastic">
                            <div class="hamburger-box">
                                <div class="hamburger-inner"></div>
                            </div>
                        </div>
                        <div class="logo-img">
                            <a href="{{url('/')}}">
                                <img src="{{url('uploads/settings/source/'.$configration->app_logo)}}" alt="img" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- main links dropdown -->
            <div class="main-header-md-ul-div">
                <div class="img-ul-div">
                    <a class="logo-img">
                        <img src="{{url('uploads/settings/source/'.$configration->app_logo)}}" alt="img" />
                    </a>
                    <ul class="main-header-md-ul">
                        @foreach($menus as $menu)
                            @if($menu->type == 'link')
                                <li><a href="{{$menu->type_value}}" class="@if(Request::segment(1) == $menu->type_value) active-li @endif @if($menu->link_en == 'Book_Now') book-now @endif menuhomeicon"><span class="hometext"> {{(app()->getLocale() == 'en')?$menu->name_en:$menu->name_ar}}</span></a></li>
                            @else
                                @if(count($menu->subMenu()) > 0)
                                <li class="drop-li"><a class="@if(Request::segment(1) == $menu->type) active-li @endif drop-a" href="{{url("$menu->type")}}"> {{(app()->getLocale() == 'en')?$menu->name_en:$menu->name_ar}}<i class="fontello icon-plus-outline"></i></a>
                                    <ul class="dropped-ul">
                                        @foreach($menu->subMenu() as $subMenu)
                                            @if(count($subMenu->subMenu()) > 0)
                                                <li class="drop-li"><a href="{{url("/$subMenu->type") }}">{{(app()->getLocale() == 'en')?$subMenu->name_en:$subMenu->name_ar}}</a>
                                                    <ul class="dropped-ul">
                                                        @foreach($subMenu->subMenu() as $subSubMenu)
                                                            <li class="drop-li"><a href="{{ url("$subSubMenu->type") }}">{{(app()->getLocale() == 'en')?$subSubMenu->name_en:$subSubMenu->name_ar}}</a></li>
                                                        @endforeach
                                                    </ul>
                                                </li>
                                            @else
                                                <li><a href="{{ url("$subMenu->type") }}">{{(app()->getLocale() == 'en')?$subMenu->name_en:$subMenu->name_ar}}</a></li>
                                            @endif
                                        @endforeach
                                    </ul>
                                </li>
                                @elseif($menu->type == 'home')
                                <li><a class="@if(Request::segment(1) == '') active-li @endif" href='{{url("/")}}'>{{(app()->getLocale() == 'en')?$menu->name_en:$menu->name_ar}}</a></li>
                                @elseif ($menu->type == 'services')    
                                    <li class="drop-li"><a class="@if(Request::segment(1) == $menu->type) active-li @endif drop-a" href="{{url('/')}}">{{(app()->getLocale() == 'en')?$menu->name_en:$menu->name_ar}}<i class="fontello icon-plus-outline"></i></a>
                                        <ul class="dropped-ul">
                                            @foreach($menuServices as $service)
                                                <li><a href="{{route("checkUrl",$service->link)}}">{{(app()->getLocale() == 'en')?$service->name_en:$service->name_ar}}</a>
                                                    @if(count($service->childs()) > 0)
                                                        <ul class="sub-menu">
                                                            @foreach ($service->childs() as $child)
                                                                <li><a href="{{route("checkUrl",$child->link)}}">{{(app()->getLocale() == 'en')?$child->name_en:$child->name_ar}}</a></li>
                                                            @endforeach
                                                        </ul>
                                                    @endif
                                                </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    @elseif ($menu->type == 'projects')
                                    <li class="drop-li"><a class="@if(Request::segment(1) == $menu->type) active-li @endif drop-a" href="{{url('/projects')}}">{{(app()->getLocale() == 'en')?$menu->name_en:$menu->name_ar}}<i class="fontello icon-plus-outline"></i></a>
                                        <ul class="dropped-ul">
                                            @foreach($projects as $project)
                                                <li><a href="{{route("checkUrl",$project->link)}}">{{(app()->getLocale() == 'en')?$project->name_en:$project->name_ar}}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </li>

                                @elseif($menu->type == 'indvidual-registration/login')    
                                    @if(session()->has('individual'))
                                        <li>
                                            <a class="@if(Request::segment(1) == '') active-li @endif" href='{{url("indvidual-registration/step/1")}}'>{{trans('form.application_information')}} </a>
                                        </li>
                                    @else
                                        <li>
                                            <a class="@if(Request::segment(1) == 'indvidual-registration/login') active-li @endif" href='{{url("indvidual-registration/nafathAuth")}}'>{{(app()->getLocale() == 'en')?$menu->name_en:$menu->name_ar}}</a>
                                        </li>
                                    @endif
                                @elseif($menu->type == 'company-registration/login')    
                                    @if(session()->has('company'))
                                        <li>
                                            <a class="@if(Request::segment(1) == '') active-li @endif" href='{{url("company-registration/step/1")}}'>{{trans('form.application_information2')}} </a>
                                        </li>
                                    @else
                                        <li>
                                            <a class="@if(Request::segment(1) == 'company-registration/login') active-li @endif" href='{{url("company-registration/nafathAuth")}}'>{{(app()->getLocale() == 'en')?$menu->name_en:$menu->name_ar}}</a>
                                        </li>
                                    @endif
                                @else
                                    <li><a href="{{ url("$menu->type") }}" class="@if(Request::segment(1) == $menu->type) active @endif  menuhomeicon">{{(app()->getLocale() == 'en')?$menu->name_en:$menu->name_ar}} </a></li>
                                @endif
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>

        <div class="header-lg">
            
            <div class="header-lg-bottom">
                <div class="mfa-container">
                    <div class="block-wrapper">
                        <div class="logo-img">
                            <a href="{{url('/')}}">
                                <img src="{{url('uploads/settings/source/'.$configration->app_logo)}}" alt="img" />
                            </a>
                        </div>
                        <div class="header-lg-ul-div">
                            <div class="lang-btn">                            
                                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                    @if($localeCode == 'ar' && LaravelLocalization::getCurrentLocale() == 'en')
                                        <a href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}"><i class="fas fa-language" style="color: #216ec0;"></i> {{trans("home.$localeCode")}}</a>
                                    @elseif($localeCode == 'en' && LaravelLocalization::getCurrentLocale() == 'ar')
                                        <a href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}"><i class="fas fa-language" style="color: #216ec0;"></i> {{trans("home.$localeCode")}}</a>
                                    @endif    
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end header -->
            @yield('content')

        <!-- start all footer -->
        <footer>
            <div class="mfa-container">
                <div class="top-footer-wrapper">
                    <div class="section-one">
                        <div class="section-body">
                            <div class="img-div">
                                <img src="{{url('uploads/settings/source/'.$configration->footer_logo)}}" alt="img" />
                            </div>
                        </div>
                    </div>
                    <div class="section-three">
                        <div class="section-body">
                            <ul class="main-section-ul">
                                <li>
                                    {!! $configration->about_app !!}
                                </li>
                                <li>                 
                                    {{$configration->address1}}
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="section-four">
                        <p class="section-heading">
                            {{trans('home.Contact')}}
                        </p>
                        <div class="section-body">
                            <div class="phone-location">
                                <ul class="phones-locations-ul">
                                    <li>
                                        <a class="phone-link" href="tel:{{$setting->mobile}}">
                                            <span>
                                                <i class="fontello icon-mobile"></i>
                                                {{$setting->mobile}}
                                            </span>
                                        </a>
                                    
                                    </li>
                                    <li>
                                        <a class="phone-link" href="mailto:{{$setting->email}}">
                                            <span>
                                                <i class="fontello icon-mail"></i>
                                               {{$setting->email}}
                                            </span>
                                        </a>
                                    
                                    </li>
                                    <li>
                                        <a class="location-div" href="https://wa.me/{{$setting->whatsapp}}">
                                        <i class="fontello icon-whatsapp"></i>
                                            {{$setting->whatsapp}} 
                                        </a>
                                    </li>
                                    <li>
                                        <a class="location-div" href="{{$setting->linkedin}}">
                                            <i class="fontello icon-linkedin-1"></i>
                                            {{trans('home.follow us on linkedin')}}
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                
                    <div class="section-two">
                    
                        <div class="section-body">
                            <img src="{{url('resources/assets/front/images/logo/logo_CMA.jpg')}}" alt="">
                            <ul class="main-section-ul">
                                @foreach($capitalMarkets as $capitalMarket)
                                    <li>
                                        <a href="{{!empty($capitalMarket->pdf) ? url('uploads/pdf/' . $capitalMarket->pdf) : '#'}}" target="_blank">
                                            {{app()->getLocale() == 'en' ? $capitalMarket->name_en : $capitalMarket->name_ar}}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 ">
                            <ul id="menu-footer-menu-ar" class="footer-menu-links text-center">
                                @foreach ($footerMemus as $footerMemu)
                                    <li id="menu-item-605" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-430 current_page_item menu-item-605">
                                        <a href="@if($footerMemu->type == 'services') {{url('/')}} @else {{route('checkUrl', $footerMemu->type)}}@endif ">{{app()->getLocale() == 'en' ? $footerMemu->name_en : $footerMemu->name_ar}}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
         <!--   <div class="bottom-footer">
                <div class="mfa-container">
                            <p class="copyright">All Rights Reserved  &copy; {{date('Y')}} NOMW </p>
                </div>
            </div> -->
			
			
			<div class="developed-by pt-2 pb-2">
				<div class="container">
					<div class="row justify-content-between mx-0 ">
						<div class="align-self-center">
						{{trans('home.All rights reserved to Nomou Capital for Financial Consultations')}} {{date('Y')}} 
						</div>
						<div>
						<span> {{trans('home.development')}} </span>
						<!--<img src="https://www.appsbunches.com/LogoAppsbunches/logo.png" alt="" data-pagespeed-url-hash="1783590714" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"> -->
							<p>{{trans('home.Arab Soft Company')}}</p>
						</div>
					</div>
				</div>
				</div>
        </footer>
        <!-- end all footer -->

        

        <!-- back to top button -->
        <div class="back-to-top-btn">
            <i class="fontello icon-up-1"></i>
        </div>
        <!-- ./back to top button -->
		@if(!empty($setting->whatsapp))
		<!--- Social ---->
		<ul id="wrapper" class="" style="transform: translate(15%, 100%);">
          <li class="Icon whatsapp">
              <!--<span class="tooltip">whatsapp</span>-->
              <a href="https://wa.me/{{$setting->whatsapp}}" target="_blank"><span><i class="fontello icon-whatsapp"></i></span>
			  </a>
          </li>
			
          
          
        </ul>
		<!--- Social ---->
		@endif
		
        <script src="{{url('resources/assets/front/js/jquery-3.4.1.min.js')}}"></script>
        <script src="{{url('resources/assets/front/js/bootstrap.min.js')}}"></script>
        <script src="{{url('resources/assets/front/js/jquery.waypoints.min.js')}}"></script>
        <script src="{{url('resources/assets/front/js/swiper.min.js')}}"></script>
        <script src="{{url('resources/assets/front/js/aos.js')}}"></script>
        <script src="{{url('resources/assets/front/js/fotorama.js')}}"></script>
        <script src="{{url('resources/assets/front/js/lightgallery.js')}}"></script>
        <script src="{{url('resources/assets/front/js/lg-thumbnail.js')}}"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
        <script src="{{url('resources/assets/front/js/bootstrap-hijri-datetimepicker.min.js')}}"></script>
        <script src="{{url('resources/assets/front/js/bootstrap-hijri-datepicker.min.js')}}"></script>
        <script src="{{url('resources/assets/front/js/index.js')}}"></script>
        <script>
$(".hijri-date-input").hijriDatePicker({

// timezone
timeZone: 'Etc/UTC',

// Date format. See moment.js docs for valid formats.
format: 'DD-MM-YYYY',
hijriFormat: 'iYYYY-iMM-iDD',
hijriDayViewHeaderFormat: 'iMMMM iYYYY',

// Changes the heading of the datepicker when in "days" view.
dayViewHeaderFormat: 'MMMM YYYY',

// Allows for several input formats to be valid. 
extraFormats: false,

// Number of minutes the up/down arrow's will move the minutes value in the time picker
stepping: 1,

// Prevents date/time selections before this date
minDate: '1950-01-01',

// Prevents date/time selections after this date
maxDate: '2070-01-01',

// On show, will set the picker to the current date/time
useCurrent: true,

// Using a Bootstraps collapse to switch between date/time pickers.
collapse: true,

// See moment.js for valid locales.
locale: 'ar-SA',

// Sets the picker default date/time. 
defaultDate: false,

// Disables selection of dates in the array, e.g. holidays
disabledDates: false,

// Disables selection of dates NOT in the array, e.g. holidays
enabledDates: false,

// Change the default icons for the pickers functions.
icons: {
  time: 'fa fa-clock text-primary',
  date: 'glyphicon glyphicon-calendar',
  up: 'fa fa-chevron-up text-primary',
  down: 'fa fa-chevron-down text-primary',
  previous: '<<',
  next: '>>',
  today: 'اليوم',
  clear: 'مسح',
  close: 'اغلاق'
},

// custom tooltip text
tooltips: {
  today: 'Go to today',
  clear: 'Clear selection',
  close: 'Close the picker',
  selectMonth: 'Select Month',
  prevMonth: 'Previous Month',
  nextMonth: 'Next Month',
  selectYear: 'Select Year',
  prevYear: 'Previous Year',
  nextYear: 'Next Year',
  selectDecade: 'Select Decade',
  prevDecade: 'Previous Decade',
  nextDecade: 'Next Decade',
  prevCentury: 'Previous Century',
  nextCentury: 'Next Century',
  pickHour: 'Pick Hour',
  incrementHour: 'Increment Hour',
  decrementHour: 'Decrement Hour',
  pickMinute: 'Pick Minute',
  incrementMinute: 'Increment Minute',
  decrementMinute: 'Decrement Minute',
  pickSecond: 'Pick Second',
  incrementSecond: 'Increment Second',
  decrementSecond: 'Decrement Second',
  togglePeriod: 'Toggle Period',
  selectTime: 'Select Time'
},

// Defines if moment should use scrict date parsing when considering a date to be valid
useStrict: false,

// Shows the picker side by side when using the time and date together
sideBySide: false,

// Disables the section of days of the week, e.g. weekends.
daysOfWeekDisabled: [],

// Shows the week of the year to the left of first day of the week
calendarWeeks: false,

// The default view to display when the picker is shown
// Accepts: 'years','months','days'
viewMode: 'days',

// Changes the placement of the icon toolbar
toolbarPlacement: 'default',

// Show the "Today" button in the icon toolbar
showTodayButton: false,

// Show the "Clear" button in the icon toolbar
showClear: false,

// Show the "Close" button in the icon toolbar
showClose: false,

// On picker show, places the widget at the identifier (string) or jQuery object if the element has css position: 'relative'
widgetPositioning: {
  horizontal: 'auto',
  vertical: 'auto'
},

// On picker show, places the widget at the identifier (string) or jQuery object **if** the element has css `position: 'relative'`
widgetParent: null,

// Allow date picker show event to fire even when the associated input element has the `readonly="readonly"`property.
ignoreReadonly: false,

// Will cause the date picker to stay open after selecting a date if no time components are being used
keepOpen: false,

// If `false`, the textbox will not be given focus when the picker is shown.
focusOnShow: true,

// Will display the picker inline without the need of a input field. This will also hide borders and shadows.
inline: false,

// Will cause the date picker to **not** revert or overwrite invalid dates.
keepInvalid: false,

// CSS selector
datepickerInput: '.datepickerinput',

// shows switcher
showSwitcher: true,

// Debug mode
debug: false,

// If `true`, the picker will show on textbox focus and icon click when used in a button group.
allowInputToggle: false,

// Must be in 24 hour format. Will allow or disallow hour selections (much like `disabledTimeIntervals`) but will affect all days.
disabledTimeIntervals: false,

// Disable/enable hours
disabledHours: false,
enabledHours: false,

// This will change the `viewDate` without changing or setting the selected date.
viewDate: false,

// Use hijri date
hijri: false,

// Enable/disable RTL mode
isRTL: false

});
</script>
<script>
    $(".hijri-date-input").keypress(function (evt) {
        evt.preventDefault();
    });
</script>
        @yield('script')
    </body>
</html>