<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HomeSlider;
use App\Models\Category;
use App\Models\HomeImage;
use DB;
use App\Models\MenuItem;
use Auth;
use App\Models\Service;
use App\Models\Project;
use App\Models\Page;
use App\Models\Fund;
use App\Models\SubscribeToFund;
use App\Models\AboutStruc;
use App\Models\About;
use App\Models\ContactUs;
use App\Models\Setting;
use Mail;
use App\Models\BlogCategory;
use App\Models\BlogItem;
use App\Models\GalleryImage;
use App\Models\GalleryVideo;
use App\Models\SeoAssistant;
use App\Models\Configration;
use Melbahja\Seo\Schema;
use Melbahja\Seo\Schema\Thing;
use Melbahja\Seo\MetaTags;
use App\Models\Faq;
use App\Models\Brand;
use App\Models\AboutValue;
use App\Models\Career;
use App\Models\Exports\UserDataExport;
use App\Models\Testimonial;
use App\Models\Address;
use App\Models\Department;
use App\Models\NewsLetter;
class WebsiteController extends Controller
{
    
    public function checkUrl($slug){
        $checkMenu = MenuItem::where('type',$slug)->first();
        $checkBlog = BlogItem::where('link',$slug)->first();
        $checkService = Service::where('link',$slug)->first();
        $checkProject = Project::where('link',$slug)->first();
		$checkFund = Fund::where('link',$slug)->first();
        
        if($checkMenu){
            return $this->menus($checkMenu->type);
        }
        
        if($checkBlog){
            return $this->getBlogPage($slug);
        }
        
        if($checkService){
            return $this->getServiceDetails($slug);
        }
        if($checkProject){
            return $this->getProjectDetails($slug);
        }
		if($checkFund){
            return $this->getFundDetails($slug);
        }
        
    }
    
    ////////////// function returnindex page///////////
    public function home(){
        $lang=\App::getLocale();
        $configration = Configration::where('lang',$lang)->first();
        $setting = Setting::first();
        $seo = SeoAssistant::first();
        $sliders = HomeSlider :: where('lang',$lang)->where('status',1)->get();
        $services = Service::where('status',1)->where('parent_id',0)->orderBy('order')->where('home',1)->get();
        $blogs = BlogItem::where('status',1)->limit(6)->get();
        $aboutValues = AboutValue::where('status',1)->get();
        $about = About::first();
        $aboutStrucs = AboutStruc::where('lang',$lang)->where('status',1)->get();
        $brands = Brand::where('status',1)->get();
        $testimonials = Testimonial::where('lang',$lang)->where('status',1)->get();
        $subServices = Service::where('status',1)->where('parent_id', '!=', 0)->orderBy('order')->where('home',1)->orderBy('name_ar')->get();
        $address = Address::where('status', 1)->get();
        $schema1 = new Thing('LocalBusiness', [
            'name'          => $configration->app_name,
            'url'          => url('/'),
            'image'         => url("uploads/settings/source/$configration->app_logo"),
            'telephone' => $setting->mobile,
            'address' => $configration->address1,
        ]);

        
        $schema2= new Thing('Organization', [
            'url'          => url('/'),
            'logo'         => url("uploads/settings/source/$configration->app_logo"),
            'contactPoint' => new Thing('ContactPoint', [
                'telephone' => $setting->mobile,
                'contactType' => 'customer service'
            ]),
        ]);

        $schema = new Schema(
            $schema1,
            $schema2
        );
        
        $metatags = new MetaTags();
        $metatags
                ->title(($seo->home_meta_title)? $seo->home_meta_title:$configration->app_name)
                ->meta('title',($seo->home_meta_title)? $seo->home_meta_title:$configration->app_name)
                ->description(($seo->home_meta_desc)?$seo->home_meta_desc:strip_tags($configration->about_app))
                ->meta('author',$configration->app_name)
                ->image(url("uploads/settings/source/$configration->app_logo"))
                ->mobile(url('/'))
                ->canonical(url('/'))
                ->shortlink(url('/'))
                ->meta('robots',($seo->home_meta_robots)?'index':'noindex');
        

        return view('website.home',compact('sliders','services', 'subServices','blogs','schema','metatags','about','aboutStrucs', 'address','brands', 'aboutValues', 'testimonials'));
    }

    ////////////FUNCTION RETURN VIEW ABOUT US//////
    public function aboutUs(){
        $lang=\App::getLocale();
        $configration = Configration::where('lang',$lang)->first();
        $seo = SeoAssistant::first();
        $about = About::first();
        $aboutStrucs = AboutStruc::where('lang',$lang)->where('status',1)->get();
        $aboutValues = AboutValue::where('status',1)->get();

        $metatags = new MetaTags();
        $metatags   
                ->title(($seo->about_meta_title)? $seo->about_meta_title : (($lang == 'en')?$about->title_en:$about->title_ar))
                ->meta('title',($seo->about_meta_title)? $seo->about_meta_title :$about->title_ar)
                ->description(($seo->about_meta_desc)?$seo->about_meta_desc:(($lang == 'en')?strip_tags($about->text_en):strip_tags($about->text_ar)))
                ->meta('author',$configration->app_name)
                ->image(url("uploads/settings/source/$configration->app_logo"))
                ->mobile(url('/signup-as-indvidual'))
                ->canonical(url('/signup-as-indvidual'))
                ->shortlink(url('/signup-as-indvidual'))
                ->meta('robots',($seo->about_meta_robots)?'index':'noindex');
                
        $schema = new Schema(
            new Thing('Article', [
                'url'=> url("/signup-as-indvidual"),
                'image'=> url("uploads/settings/source/$configration->app_logo"),
                'headline'=> ($seo->about_meta_title)?$seo->about_meta_title:(($lang == 'en')?$about->title_en:$about->title_ar),
                'author' => new Thing('author', [
                    'name'=>$configration->app_name,
                    'url'=> url("/signup-as-indvidual"),
                ]),
                
                'datePublished'=> $about->crated_at,
                'dateModified'=> $about->updated_at,
            ])
        );
                
        return view('website.about_us',compact('lang','about','aboutStrucs','metatags','schema','aboutValues'));
    }

    ////////////FUNCTION RETURN VIEW CONTACT US//////
    public function contactUs(){
        $lang=\App::getLocale();
        $configration = Configration::where('lang',$lang)->first();
        $seo = SeoAssistant::first();
		$about = About::first();
        $services = Service::where('status',1)->where('parent_id',0)->orderBy('order')->where('home',1)->orderBy('name_ar')->take(8)->get();
        $address = Address::where('status', 1)->get();
        $metatags = new MetaTags();
        $metatags
                ->title(($seo->contact_meta_title)?$seo->contact_meta_title:$configration->app_name)
                ->meta('title',($seo->contact_meta_title)?$seo->contact_meta_title:$configration->app_name)
                ->description(($seo->contact_meta_desc)?$seo->contact_meta_desc:strip_tags($configration->about_app))
                ->meta('author',$configration->app_name)
                ->image(url("uploads/settings/source/$configration->app_logo"))
                ->mobile(url('/contact-us'))
                ->canonical(url('/contact-us'))
                ->shortlink(url('/contact-us'))
                ->meta('robots',($seo->contact_meta_robots)?'index':'noindex');
                
        $schema = new Schema(
            new Thing('Article', [
                'url'=> url("/contact-us"),
                'image'=> url("uploads/settings/source/$configration->app_logo"),
                'headline'=> ($seo->contact_meta_title)?$seo->contact_meta_title:$configration->app_name,
                'author' => new Thing('author', [
                    'name'=>$configration->app_name,
                    'url'=> url("/contact-us"),
                ]),
            ])
        );
        
        
        return view('website.contact-us',compact('lang','schema','metatags','services', 'address', 'about'));
    }

    ////////////// function saveContact//////////
    public function saveContactUs(Request $request){
         $request->validate([
           'name'=>'required|max:150',
           'email'=>'required|email',
           'message'=>'required',
           'phone'=>'regex:/(01)[0-9]{9}/',
         ]);
        $formData= $request->all();
        
        $contact = new ContactUs();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->message = $request->message;
        $contact->save();


        // $data = array('contact' => $contact);
        // $setting = Setting::first();
	    // Mail::send('emails/contact_email', $data, function($msg) use ($setting) {
  		// 	$msg->to($setting ->contact_email, 'operations@nomwcapital.com.sa')->subject('Contact Us');
  		// 	$msg->from(config('mail.from.address'),config('mail.from.name'));
		// });

        return redirect()->back()->with(['contact_message'=>trans('home.Thank you for contacting us. A customer service officer will contact you soon')]);

    }

        ////////////// function saveContact//////////
        public function saveNewsletter(Request $request){
            $request->validate([
              'email'=>'required|email',
            ]);
           $formData= $request->all();
           $contact = new NewsLetter();
           $contact->email = $request->email;
           $contact->save();
           return redirect()->back()->with(['contact_message'=>trans('home.Thank you for contacting us. A customer service officer will contact you soon')]);
       }
	        ////////////// function saveContact//////////
        public function saveFunds(Request $request){
			$individual = Idividual::select('id')->where('national_id', $request->id_num)->first();
			if($individual){
				$subscribeToFund = SubscribeToFund::where('fund_id', $request->fund_id)->where('individual_id', $individual)->first();
				if($subscribeToFund){
					return redirect()->url('indvidual-registration/login')->with(['error'=>trans('home.you are already subscribe to this fund')]);
				}else{
            $request->validate([
              'name'=>'required|string|max:150',
				'name'=>'required|string|max:150',
				'id_type'=>'required|string|max:150',
				'id_num'=>'required|numeric',
				'subscription_type'=>'required|in:eyes,monetary',
				'number_of_units_digital'=>'required|string|max:150',
				'number_of_units_writing'=>'required|string|max:150',
				'The_subscription_fee_is_in_Saudi_riyals_digital'=>'required|string|max:150',
				'The_subscription_fee_is_in_Saudi_riyals_writing'=>'required|string|max:150',
				'paid_amount_digital'=>'required|string|max:150',
				'paid_amount_writing'=>'required|string|max:150',
				'client_name'=>'required|string|max:150',
				'client_signature'=>'required',
				'date'=>'required|date',
            ]);
           $formData= $request->all();
           $contact = new SubscribeToFund();
			$contact->fund_id = $request->fund_id;
           $contact->name = $request->name;
			$contact->id_type = $request->id_type;
			$contact->id_num = $request->id_num;
			$contact->subscription_type = $request->subscription_type;
			$contact->number_of_units_digital = $request->number_of_units_digital;
			$contact->number_of_units_writing = $request->number_of_units_writing;
			$contact->The_subscription_fee_is_in_Saudi_riyals_digital = $request->The_subscription_fee_is_in_Saudi_riyals_digital;
			$contact->The_subscription_fee_is_in_Saudi_riyals_writing = $request->The_subscription_fee_is_in_Saudi_riyals_writing;
			$contact->paid_amount_digital = $request->paid_amount_digital;
			$contact->paid_amount_writing = $request->paid_amount_writing;
			$contact->client_name = $request->client_name;
			$contact->individual_id = $individual->id;
			if($request->hasFile("client_signature")){
				$extension = $request->file('client_signature')->getClientOriginalExtension();
				$filename = rand(11111111, 99999999). '.' . $extension;
				$request->file('client_signature')->move( base_path() . '/uploads/fundSignatures/source/', $filename );
				$contact->client_signature = $filename;
			}
			$contact->date = $request->date;
           $contact->save();
           return redirect()->back()->with(['contact_message'=>trans('home.Thank you for contacting us. A customer service officer will contact you soon')]);
			}
			}else{
				return redirect()->url('indvidual-registration/login')->with(['error'=>trans('home.please register first')]);
			}
       }



    ////////// FUNCTION RETURN PAGE INFORMATION /////////
    public function getPage($link){
        $lang=\App::getLocale();
        $page =Page::where('link',$link)->first();
        return view('website.page',compact('lang','page'));

    }

    ///////// function retun dynamic menu//////////
    public function menus($menu){
        $menu = MenuItem::where('type',$menu)->first();
        $lang=\App::getLocale();
        
        if($menu->type == 'home'){
            return $this->home();
        }

        elseif($menu->type == 'about-us'){
            return $this->aboutUs();
        }

        elseif($menu->type == 'contact-us'){
            return $this->contactUs();
        }

        elseif($menu->type == 'projects'){
            return $this->getProjects();
        }
        
        elseif($menu->type == 'project'){
            return $this->getProjectDetails($menu->type_value);
        }

        elseif($menu->type == 'services'){
            return $this->getservices();
        }
        
        elseif($menu->type == 'service'){
            return $this->getServiceDetails($menu->type_value);
        }
        elseif($menu->type == 'galleryImages'){
             return $this->getGalleryImages();
        }
        
        elseif($menu->type == 'certificates'){
             return $this->getCertificates();
        }
        
        elseif($menu->type == 'galleryVideos'){
             return $this->getGalleryVideos();
        }


        elseif($menu->type == 'blogs'){
             return $this->getBlogs();
        }
        
        elseif($menu->type == 'categories'){
             return $this->getScopes();
        }
        
        elseif($menu->type == 'category'){
             return redirect("scope/$menu->type_value/details");
        }
        
    }

    /////////////////////FUNCTION RETURN VIEW BLOGS ///////////
    public function getBlogs(){
        $lang=\App::getLocale();
        $blogCategories = BlogCategory::where('status',1)->get();
        $blogCategoriesIds = BlogCategory::where('status',1)->pluck('id')->toArray();
        $blogs = BlogItem::whereIn('blogcategory_id',$blogCategoriesIds)->where('status',1)->paginate(15);
        $configration = Configration::where('lang',$lang)->first();
        $seo = SeoAssistant::first();
        
        
        $metatags = new MetaTags();
        $metatags
                ->title(($seo->blogs_meta_title)?$seo->blogs_meta_title:$configration->app_name)
                ->meta('title',($seo->blogs_meta_title)?$seo->blogs_meta_title:$configration->app_name)
                ->description(($seo->blogs_meta_desc)?$seo->blogs_meta_desc:strip_tags($configration->about_app))
                ->meta('author',$configration->app_name)
                ->image(url("uploads/settings/source/$configration->app_logo"))
                ->mobile(url('/blogs'))
                ->canonical(url('/blogs'))
                ->shortlink(url('/blogs'))
                ->meta('robots',($seo->blogs_meta_robots)?'index':'noindex');
                
        return view('website.blogs',compact('lang','blogCategories','blogs','metatags'));
    }

    /////////////////////FUNCTION RETURN VIEW BLOG ///////////
    public function getBlogPage($link){
        $lang=\App::getLocale();
        $blog = BlogItem::where('link',$link)->first();
        $faqs = Faq::where('type','blog_item')->where('blog_item_id',$blog->id)->get();
        $configration = Configration::where('lang',$lang)->first();
        $about = About::first();
        $sideBlogs = BlogItem::where('status', 1)->limit(5)->orderBy('id', 'DESC')->get();
        $footerBlogs = BlogItem::where('status', 1)->limit(4)->orderBy('id', 'DESC')->get();
        
        
        $metatags = new MetaTags();
        $metatags
                ->title(($blog->meta_keywords)?$blog->meta_keywords : (($lang == 'en')?$blog->title_en:$blog->title_ar))
                ->meta('title',($blog->meta_keywords)?$blog->meta_keywords:$configration->app_name)
                ->description(($blog->meta_description)?$blog->meta_description:strip_tags($configration->about_app))
                ->meta('author',$blog->writer)
                ->image(url("uploads/blogItems/source/$blog->image"))
                ->mobile(url("$link"))
                ->canonical(url("$link"))
                ->shortlink(url("$link"))
                ->meta('robots',($blog->meta_robots)?'index':'noindex');
                
        $schema1 = new Thing('Article', [
            'url'=> url("$link"),
            'image'=> url("uploads/blogItems/source/$blog->image"),
            'headline'=>($lang == 'en')?$blog->title_en:$blog->title_ar,
            'author' => new Thing('author', [
                'name'=>$blog->writer,
                'url'=> url("$link"),
            ]),
            
            'datePublished'=> $blog->crated_at,
            'dateModified'=> $blog->updated_at,
        ]);
        
        $ques = [];
        foreach($faqs as $faq){
            $x = new Thing('Question', [
                'name'=>$faq->question,
                'acceptedAnswer' => new Thing('Answer', [
                    'text'=>$faq->answer,
                ]),
            ]);
            
            array_push($ques,$x);
        }

        $schema2 = new Thing('FAQPage', [
            'mainEntity' =>[
                $ques
            ]
        
        ]);
        
        $schema = new Schema(
            $schema1,
            $schema2
        );

        $blogs = BlogItem::where('id','!=',$blog->id)->where('status',1)->get();
        return view('website.blogPage',compact('lang','blog','schema','metatags','faqs','blogs', 'about', 'sideBlogs', 'footerBlogs'));
    }

    /////////////////////FUNCTION RETURN VIEW CATEGORY BLOGs ///////////
    public function getCategoryBlogs($id){
        $lang=\App::getLocale();
        $blogCategory = BlogCategory::find($id);
        $blogCategories = BlogCategory::where('status',1)->get();
        $blogs = BlogItem::where('blogcategory_id',$id)->where('status',1)->get();
        return view('website.category-blogs',compact('lang','blogCategories','blogs','blogCategory'));
    }

    ////////// function return country regions/////
    public function getRegions(){
        $id = $_POST['id'];
        $regions = Region::where('Country_id',$id)->where('status',1)->select('name_en','id','name_ar')->get();
        return response()->json($regions);
    }

    ////////// function return region areas/////
    public function getAreas(){
        $id = $_POST['id'];
        $areas = Area::where('region_id',$id)->where('status',1)->select('name_en','id','name_ar')->get();
        return response()->json($areas);
    }
    
    ////////// function return list of published products/////
    public function getProjects(){
        $projects =Project::where('status',1)->orderBy('order', 'asc')->get();
        $lang=\App::getLocale();
        $configration = Configration::where('lang',$lang)->first();
        $services = Service::where('status',1)->where('parent_id',0)->orderBy('order')->orderBy('name_ar')->take(8)->get();
        $seo = SeoAssistant::first();
        $about = About::first();
        $aboutStrucs = AboutStruc::where('lang',$lang)->where('status',1)->get();

        $metatags = new MetaTags();
        $metatags
                ->title($configration->app_name .'|'. trans('home.patient_gallery'))
                ->meta('title',($seo->projects_meta_title)?substr($seo->projects_meta_title,0,60):substr($configration->app_name,0,60))
                ->description(($seo->projects_meta_desc)?substr($seo->projects_meta_desc,0,160):substr(strip_tags($configration->about_app),0,160))
                ->meta('author',$configration->app_name)
                ->image(url("uploads/settings/source/$configration->app_logo"))
                ->mobile(url('/projects'))
                ->canonical(url('/projects'))
                ->shortlink(url('/projects'))
                ->meta('robots',($seo->projects_meta_robots)?'index':'noindex');
                
        return view('website.projects',compact('projects','metatags','services', 'about', 'aboutStrucs'));
    }
    
    ////////// function return project Details /////
    public function getProjectDetails($link){
        $project =Project::where('link', $link)->first();
		$members =GalleryVideo::where('status',1)->orderBy('order','asc')->get();
        if($project){
            $about = About::first();
            $lang=\App::getLocale();
            $configration = Configration::where('lang',$lang)->first();
            $seo = SeoAssistant::first();
            $schema1 = new Thing('Article', [
                    'url'=> url("project/'.$project->id/details"),
                    'image'=> url("uploads/settings/source/$configration->app_logo"),
                    'headline'=>($project->meta_keywords)?$project->meta_keywords : $project->name_en,
                    'author' => new Thing('author', [
                        'name'=>$configration->app_name,
                        'url'=> url('/'),
                    ]),
                    
                    'datePublished'=> $project->crated_at,
                    'dateModified'=> $project->updated_at,
                ]);

            $schema = new Schema(
                $schema1
            );
            
            $metatags = new MetaTags();
            $metatags
                    ->title( ($project->meta_keywords)?$project->meta_keywords : (($project == 'en')?$project->name_en:$project->name_ar))
                    ->meta('title',($project->meta_keywords)?$project->meta_keywords : (($project == 'en')?$project->name_en:$project->name_ar))
                    ->description(($project->meta_keywords)?$project->meta_keywords:strip_tags($project->text_en))
                    ->meta('author',$configration->app_name)
                    ->image(url("uploads/projects/source/$project->img"))
                    ->mobile(url("project/'.$project->id/details"))
                    ->canonical(url("project/'.$project->id/details"))
                    ->shortlink(url("project/'.$project->id/details"))
                    ->meta('robots',($project->meta_robots)?'index':'noindex');
    
            $services = Service::where('status',1)->orderBy('order')->orderBy('name_ar')->get();
            $projects = Project::where('service_id',$project->service_id)->where('status',1)->orderBy('order', 'asc')->get();
            
            
            return view('website.project-details',compact('project','metatags','schema','services','projects', 'about', 'members'));
        }else{
            abort('404');
        }
    }
    
    ////////// function return list of published services/////
    public function getservices(){
        $lang=\App::getLocale();
        $services =Service::orderBy('order')->orderBy('name_ar')->where('status',1)->get();
        $servicesParent =Service::where('parent_id', 0)->orderBy('order')->orderBy('name_ar')->where('status',1)->get();
        $about = About::first();
        $configration = Configration::where('lang',$lang)->first();
        $seo = SeoAssistant::first();
        $subServices = Service::where('status',1)->where('parent_id', '!=', 0)->orderBy('order')->orderBy('name_ar')->get();

        $metatags = new MetaTags();
        $metatags
                ->title(($seo->services_meta_title)?$seo->services_meta_title:$configration->app_name)
                ->meta('title',($seo->services_meta_title)?$seo->services_meta_title:$configration->app_name)
                ->description(($seo->services_meta_dsec)?$seo->services_meta_desc:strip_tags($configration->about_app))
                ->meta('author',$configration->app_name)
                ->image(url("uploads/settings/source/$configration->app_logo"))
                ->mobile(url('/services'))
                ->canonical(url('/services'))
                ->shortlink(url('/services'))
                ->meta('robots',($seo->services_meta_robots)?'index':'noindex');
                
        return view('website.services',compact('services', 'servicesParent', 'subServices','about','metatags'));
    }
    
    ////////// function return project service /////
    public function getServiceDetails($link){
        $service =Service::where('link',$link)->first();
        $faqs = Faq::where('type','service')->where('service_id',$service->id)->get();
        $lastServices =Service::where('status',1)->orderBy('order', 'asc')->limit(6)->get();
        $lang=\App::getLocale();
        $configration = Configration::where('lang',$lang)->first();
        $seo = SeoAssistant::first();        
        
        if($service){
            $services = Service::where('parent_id',$service->id)->orderBy('order', 'asc')->where('status',1)->get();
            $lastServices =Service::where('status',1)->orderBy('order', 'asc')->limit(6)->get();

            if(count($services) > 0){
                return view('website.subServices',compact('services','service', 'lastServices'));
            }else{
                $about = About::first();
                
                $schema1 = new Thing('Article', [
                        'url'=> url("$link"),
                        'image'=> url("uploads/settings/source/$configration->app_logo"),
                        'headline'=>($service->meta_keywords)?$service->meta_keywords : $service->name_en,
                        'author' => new Thing('author', [
                            'name'=>$configration->app_name,
                            'url'=> url('/'),
                        ]),
                        
                        'datePublished'=> $service->crated_at,
                        'dateModified'=> $service->updated_at,
                    ]);
                
                $ques = [];
                foreach($faqs as $faq){
                    $x = new Thing('Question', [
                        'name'=>$faq->question,
                        'acceptedAnswer' => new Thing('Answer', [
                            'text'=>$faq->answer,
                        ]),
                    ]);
                    
                    array_push($ques,$x);
                }
        
                $schema2 = new Thing('FAQPage', [
                    'mainEntity' =>[
                        $ques
                    ]
                
                ]);
                
                $schema = new Schema(
                    $schema1,
                    $schema2
                );
                
                $metatags = new MetaTags();
                $metatags
                        ->title( ($service->meta_keywords)?$service->meta_keywords : ((app()->getLocale() == 'en')?$service->name_en:$service->name_ar))
                        ->meta('title',($service->meta_keywords)?$service->meta_keywords : ((app()->getLocale() == 'en')?$service->name_en:$service->name_ar))
                        ->description(($service->meta_keywords)?$service->meta_keywords:strip_tags($service->text_en))
                        ->meta('author',$configration->app_name)
                        ->image(url("uploads/services/source/$service->img"))
                        ->mobile(url("$link"))
                        ->canonical(url("$link"))
                        ->shortlink(url("$link"))
                        ->meta('robots',($service->meta_robots)?'index':'noindex');
                        
                $services = Service::where('parent_id',$service->parent_id)->orderBy('order', 'asc')->where('status',1)->get();
            
                return view('website.service-details',compact('service','about','lastServices','services','metatags','schema','faqs','services'));
            }    
        }else{
            abort('404');
        }
    }
	public function getRealEstateFunds(){
        $lang=\App::getLocale();
        $funds =Fund::where('status',1)->paginate(12);
                
        return view('website.funds',compact('funds'));
    }
	    ////////// function return project service /////
    public function getFundDetails($link){
		$lang=\App::getLocale();
        $fund =Fund::where('link',$link)->where('status', 1)->first();
		return view('website.fund_details',compact('fund'));
	}
    
    public function getGalleryImages(){
        $lang=\App::getLocale();
        $images =GalleryImage::where('status',1)->orderBy('order','asc')->get();
        $imagesType = trans('home.galleryImages');
        $about = About::first();
        $configration = Configration::where('lang',$lang)->first();
        $seo = SeoAssistant::first();
        $allServices = Service::where('status',1)->get();
        
        $metatags = new MetaTags();
        $metatags
                ->title(($seo->gallery_images_meta_title)?$seo->gallery_images_meta_title:$configration->app_name)
                ->meta('title',($seo->gallery_images_meta_title)?$seo->gallery_images_meta_title:$configration->app_name)
                ->description(($seo->gallery_images_meta_desc)?$seo->gallery_images_meta_desc:strip_tags($configration->about_app))
                ->meta('author',$configration->app_name)
                ->image(url("uploads/settings/source/$configration->app_logo"))
                ->mobile(url('/signup-as-indvidual'))
                ->canonical(url('/signup-as-indvidual'))
                ->shortlink(url('/signup-as-indvidual'))
                ->meta('robots',($seo->gallery_images_meta_robots)?'index':'noindex');
                
        $schema = new Schema(
            new Thing('Article', [
                'url'=> url("/signup-as-indvidual"),
                'image'=> url("uploads/settings/source/$configration->app_logo"),
                'headline'=> ($seo->gallery_images_meta_title)?$seo->gallery_images_meta_title:$configration->app_name,
                'author' => new Thing('author', [
                    'name'=>$configration->app_name,
                    'url'=> url("/signup-as-indvidual"),
                ]),
            ])
        );
        
        
        return view('website.individual',compact('images','about','metatags','schema','imagesType', 'allServices'));
    }

    public function getCertificates(){
        $lang=\App::getLocale();
        $images =GalleryImage::where('status',1)->orderBy('order','asc')->where('type','certificate')->paginate(15);
        $imagesType = trans('home.certificates');
        $about = About::first();
        $configration = Configration::where('lang',$lang)->first();
        $seo = SeoAssistant::first();

        $metatags = new MetaTags();
        $metatags
                ->title(($seo->gallery_images_meta_title)?$seo->gallery_images_meta_title:$configration->app_name)
                ->meta('title',($seo->gallery_images_meta_title)?$seo->gallery_images_meta_title:$configration->app_name)
                ->description(($seo->gallery_images_meta_desc)?$seo->gallery_images_meta_desc:strip_tags($configration->about_app))
                ->meta('author',$configration->app_name)
                ->image(url("uploads/settings/source/$configration->app_logo"))
                ->mobile(url('/galleryImages'))
                ->canonical(url('/galleryImages'))
                ->shortlink(url('/galleryImages'))
                ->meta('robots',($seo->gallery_images_meta_robots)?'index':'noindex');
                
        $schema = new Schema(
            new Thing('Article', [
                'url'=> url("/galleryImages"),
                'image'=> url("uploads/settings/source/$configration->app_logo"),
                'headline'=> ($seo->gallery_images_meta_title)?$seo->gallery_images_meta_title:$configration->app_name,
                'author' => new Thing('author', [
                    'name'=>$configration->app_name,
                    'url'=> url("/galleryImages"),
                ]),
            ])
        );

        return view('website.gallery-images',compact('images','about','metatags','schema','imagesType'));
    }
    
    public function getGalleryVideos(){
        $lang=\App::getLocale();
        $videos =GalleryVideo::where('status',1)->orderBy('order','asc')->get();
        $about = About::first();
        $configration = Configration::where('lang',$lang)->first();
        $seo = SeoAssistant::first();
        
        
        $metatags = new MetaTags();
        $metatags
                ->title(($seo->gallery_videos_meta_title)?$seo->gallery_videos_meta_title:$configration->app_name)
                ->meta('title',($seo->gallery_videos_meta_title)?$seo->gallery_videos_meta_title:$configration->app_name)
                ->description(($seo->gallery_videos_meta_desc)?$seo->gallery_videos_meta_desc:strip_tags($configration->about_app))
                ->meta('author',$configration->app_name)
                ->image(url("uploads/settings/source/$configration->app_logo"))
                ->mobile(url('/signup-as-company'))
                ->canonical(url('/signup-as-company'))
                ->shortlink(url('/signup-as-company'))
                ->meta('robots',($seo->gallery_videos_meta_desc)?'index':'noindex');
                
        $schema = new Schema(
            new Thing('Article', [
                'url'=> url("/signup-as-company"),
                'image'=> url("uploads/settings/source/$configration->app_logo"),
                'headline'=> ($seo->gallery_videos_meta_title)?$seo->gallery_videos_meta_title:$configration->app_name,
                'author' => new Thing('author', [
                    'name'=>$configration->app_name,
                    'url'=> url("/signup-as-company"),
                ]),
            ])
        );
        return view('website.company',compact('videos','about','metatags','schema'));
    }
    
    public function career(){
        $lang=\App::getLocale();
        $configration = Configration::where('lang',$lang)->first();
        $seo = SeoAssistant::first();
        $departments = Department::where('status', 1)->get();

        $metatags = new MetaTags();
        $metatags
                ->title(($seo->career_meta_title)?$seo->career_meta_title:$configration->app_name)
                ->meta('title',($seo->career_meta_title)?$seo->career_meta_title:$configration->app_name)
                ->description(($seo->career_meta_desc)?$seo->career_meta_desc:strip_tags($configration->about_app))
                ->meta('author',$configration->app_name)
                ->image(url("uploads/settings/source/$configration->app_logo"))
                ->mobile(url('/career'))
                ->canonical(url('/career'))
                ->shortlink(url('/career'))
                ->meta('robots',($seo->career_meta_robots)?'index':'noindex');
                
        $schema = new Schema(
            new Thing('Article', [
                'url'=> url("/career"),
                'image'=> url("uploads/settings/source/$configration->app_logo"),
                'headline'=> ($seo->career_meta_title)?$seo->career_meta_title:$configration->app_name,
                'author' => new Thing('author', [
                    'name'=>$configration->app_name,
                    'url'=> url("/career"),
                ]),
            ])
        );
        return view('website.career',compact('metatags','schema', 'departments'));
    }
    
    public function saveCareer(Request $request){
        $request->validate([
            'name'=>'required|max:150',
            'email'=>'required|email',
            'phone'=>'required|regex:/(01)[0-9]{9}/',
            'cv' => 'required|max:10000|mimes:pdf',
            'job' => 'string',
            'image' => 'image|mimes:jpg,png,jpeg,gif,svg,webp',
        ]);
        $add = new Career();
        $add->name = $request->name;
        $add->email = $request->email;
        $add->phone = $request->phone;
        $add->job = $request->job;
        $add->department = $request->department;
        //upload pdf file
        if($request->hasFile("cv")){
            $extension = $request->file('cv')->getClientOriginalExtension();
            $filename = rand(11111111, 99999999). '.' . $extension;
            $request->file('cv')->move( base_path() . '/uploads/careers/pdf', $filename );
            $add->cv = $filename;
        }
        if($request->hasFile('image')){
            $extension = $request->file('image')->getClientOriginalExtension();
            $filename = rand(11111111, 99999999). '.' . $extension;
            $request->file('image')->move( base_path() . '/uploads/careers/pdf', $filename );
            $add->image = $filename;
        }
        $add->save();

//      $data = array('contact' => $contact);
//      $setting = Setting::first();
// 	    Mail::send('emails/contact_email', $data, function($msg) use ($setting) {
//   			$msg->to($setting ->contact_email, 'Ikokeez')->subject('Contact Us');
//   			$msg->from(config('mail.from.address'),config('mail.from.name'));
// 		});

        return back()->with(['success'=>trans('home.Thank you.one of our hiring team members will contact you soon')]);

    }
    
    public function getScopes(){
        $lang=\App::getLocale();
        $scopes =Category::where('status',1)->get();


        return view('website.scopes',compact('scopes'));
    }
    
    public function getScopeDetails($id){
        $lang=\App::getLocale();
        $scope =Category::find($id);
        if($scope){
            $scopes = Category::get();
            $services = Service::where('status',1)->get();
            return view('website.scopeDetails',compact('scopes','scope','services'));
        }else{
            abort('404');
        }


    }
    
    public function search(Request $request){
        $search_input = $request->input('search_input');
        if ($search_input == '') {
             $services = Service::where('status',1)->where('status',1)->get();
        }else{
            if ($search_input){
                $services_en = Service::where('name_en', 'LIKE', '%' . $search_input . '%')->where('status',1)->get();
            }
            if ($search_input){
                $services_ar = Service::where('name_ar', 'LIKE', '%' . $search_input . '%')->where('status',1)->get();
            }
            $services=$services_en->merge($services_ar);
        }   
        
        // $lang=\App::getLocale();

        return view('website.searchResults',compact('services'));
    }
	
	public function nafathAuthanticate(){
		return 'ok';
	}
    
}
