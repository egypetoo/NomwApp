<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App;
use View;
use App\Models\Setting;
use App\Models\Configration;
use App\Models\MenuItem;
use App\Models\Page;
use Auth;
use App\Models\Category;
use App\Models\Service;
use App\Models\GalleryImage;
use App\Models\Address;
use App\Models\HomeSlider;
use App\Models\SeoAssistant;
use App\Models\AboutStruc;
use App\Models\GalleryVideo;
use App\Models\BlogItem;
use App\Models\Testimonial;
use App\Models\Project;
use App\Models\Department;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        Schema::defaultStringLength(191);
        \URL::forceScheme('https');

        view()->composer('*', function($view)
        {
            $setting = Setting::first();
            $seo = SeoAssistant::first();
            
            $lang = \LaravelLocalization::getCurrentLocale();
            App::setlocale($lang);

            $projects = Project::orderBy('order', 'asc')->get();
            $configration = Configration::where('lang',$lang)->first();
            $menus = MenuItem::where('status',1)->where('parent_id',0)->orderBy('order','ASC')->get();
            $footerMemus = MenuItem::where('status',1)->where('parent_id',0)->orderBy('order','ASC')->limit('6')->get();
            $pages = Page::where('status',1)->get();
            $capitalMarkets = Department::where('status', 1)->get();
            $menuServices = Service::where('status',1)->where('parent_id', 0)->orderBy('order', 'asc')->where('menu',1)->get();
            $footerServices = Service::where('status',1)->where('parent_id',0)->orderBy('order')->orderBy('name_ar')->take(6)->get();
            $galleryImages = GalleryImage::where('status',1)->where('type','general')->orderBy('order','asc')->get();
            $galleryImagesBefore = GalleryImage::where('status',1)->where('type','certificate')->orderBy('order','asc')->get();
            $galleryImagesBeforeLimit = GalleryImage::where('status',1)->where('type','certificate')->take(3)->orderBy('order','asc')->get();
            $lang=\App::getLocale();
            $addresses = Address::where('status',1)->get();
            $aboutStrucs = AboutStruc::where('lang', $lang)->get();
            $videos = GalleryVideo::all();
            $blogs = BlogItem::get();
            $lastBlogs = BlogItem::orderBy('id','desc')->limit(3)->get();
            $testimonials = Testimonial::where('status', 1)->get();


            App::setlocale($lang);
            View::share('language', $lang);
            View::share('setting', $setting);
            View::share('configration', $configration);
            View::share('menus', $menus);
            View::share('pages', $pages);
            View::share('footerMemus', $footerMemus);
            View::share('capitalMarkets', $capitalMarkets);
            View::share('lang', $lang);
            View::share('footerServices', $footerServices);
            View::share('galleryImages', $galleryImages);
            View::share('galleryImagesBefore', $galleryImagesBefore);
            View::share('galleryImagesBeforeLimit', $galleryImagesBeforeLimit);
            View::share('addresses', $addresses);
            View::share('seo', $seo);
            View::share('menuServices', $menuServices);
            View::share('testimonials', $testimonials);
            View::share('projects', $projects);
            View::share('aboutStrucs', $aboutStrucs);
            View::share('videos', $videos);
            View::share('blogs', $blogs);
            View::share('lastBlogs', $lastBlogs);
        });
    }
}
