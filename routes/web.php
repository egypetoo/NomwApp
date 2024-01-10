<?php

Route::group(['middleware'=>['web','localeSessionRedirect', 'localizationRedirect', 'localeViewPath'],'prefix' => LaravelLocalization::setLocale() ],function(){
    Route::group(['middleware'=>['web']],function(){	
        Route::get('/sitemap.xml','SiteMapController@index');
        Route::get('/services-sitemap.xml','SiteMapController@services');
        Route::get('/brands-sitemap.xml','SiteMapController@brands');
        Route::get('/categories-sitemap.xml','SiteMapController@categories');
        Route::get('/projects-sitemap.xml','SiteMapController@projects');
        Route::get('/pages-sitemap.xml','SiteMapController@pages');
        Route::get('/blogs-sitemap.xml','SiteMapController@blogs');

        Route::get('/lang/{lang}', 'AdminController@setlang');
        Route::get('/','WebsiteController@home');
        Route::get('signup-as-indvidual','WebsiteController@aboutUs');
        Route::get('contact-us','WebsiteController@contactUs');
        Route::post('save/contact-us','WebsiteController@saveContactUs')->name('saveContactUs');
        Route::post('save/funds','WebsiteController@saveFunds')->name('saveFunds');
        Route::post('save/newsletter','WebsiteController@saveNewsletter')->name('saveNewsletter');
        Route::get('page/{link}','WebsiteController@getPage');
        Route::get('blogs','WebsiteController@getBlogs');
        Route::get('projects','WebsiteController@getProjects');
        Route::get('project/{id}/details','WebsiteController@getProjectDetails');
        Route::get('fund/{id}/details','WebsiteController@getFundDetails')->middleware('individual');
        Route::get('services','WebsiteController@getservices');
        Route::get('real-estate-funds','WebsiteController@getRealEstateFunds')->middleware('individual');
        Route::get('blogs/{id}','WebsiteController@getCategoryBlogs');
        Route::get('signup-as-company','WebsiteController@getGalleryVideos');
        Route::get('career','WebsiteController@career');
        Route::post('save/career','WebsiteController@saveCareer');
        Route::get('scopes', 'WebsiteController@getScopes');
        Route::get('scope/{id}/details', 'WebsiteController@getScopeDetails');
        Route::get('search', 'WebsiteController@search');
        

        Route::get('/auth-with-nafath','WebsiteController@nafathAuthanticate');
        Route::group(['middleware' => ['checkNafath']], function(){
            Route::get('indvidual-registration/nafathAuth','NafathController@getIndvidualNafathAuth');
            Route::post('nafath-auth-request','NafathController@createNafathAuthRequest');
            Route::post('check-nafath-verfication','NafathController@checkNafathAuthRequest');
            Route::post('nafath-verfication-CallBack','NafathController@nafathCallBack');
            
        });

    });
});

Route::group(['middleware'=>['web','localeSessionRedirect', 'localizationRedirect', 'localeViewPath'],'prefix' => LaravelLocalization::setLocale() ],function(){
    Route::group(['middleware'=>['admin','web'],'prefix'=>'admin'],function(){
        Route::get('', 'AdminController@admin');
        Route::get('translations', 'AdminController@translations');
        Route::get('/switch-theme', 'AdminController@switchTheme');
        Route::post('{name}/up/{ids}','AdminController@updatestatus');
        Route::resource('/settings', 'SettingController');
        Route::resource('/configrations', 'ConfigrationController');
        Route::resource('users', 'UserController');
        Route::resource('departments', 'DepartmentController');
        Route::resource('roles', 'RoleController');
        Route::resource('permissions', 'PermissionController');
        Route::resource('/categories', 'CategoryController');
        Route::resource('pages', 'PageController');
        Route::resource('menus', 'MenuController');
        Route::resource('menu-items', 'MenuItemController');
        Route::post('menuTypeValue', 'MenuItemController@menuTypeValue')->name('menuTypeValue');
        Route::resource('intro-sliders', 'IntroSliderController');
        Route::resource('home-sliders', 'HomeSliderController');
        Route::resource('offers-sliders', 'OfferSliderController');
        Route::resource('services', 'ServiceController');
        Route::resource('funds', 'FundController');
        Route::post('services/uploadImages', 'ServiceController@uploadImages');
        Route::post('services/removeUploadImages', 'ServiceController@removeUploadImages');
        Route::post('services/deleteImege', 'ServiceController@deleteImege');
        Route::get('editAbout','AboutController@editAbout')->name('admin.editAbout');
        Route::PATCH('about/update','AboutController@update')->name('admin.about.update');
        Route::post('menuTypeValue', 'MenuItemController@menuTypeValue')->name('menuTypeValue');
        Route::resource('aboutStrucs', 'AboutStrucController');
        Route::resource('aboutValues', 'AboutValueController');
        Route::resource('contact-us-messages', 'ContactusController');
        Route::resource('fund-messages', 'FundMessageController');
        Route::resource('individual-messages', 'RegisterIndividualController');
        Route::resource('company-messages', 'RegisterCompanyController');
        Route::resource('brands', 'BrandController');
        Route::resource('pages', 'PageController');
        Route::resource('blog-categories', 'BlogCategoryController');
        Route::resource('blog-items', 'BlogItemController');
        Route::post('updateFaq', 'BlogItemController@updateFaq')->name('updateFaq');
        Route::post('removeFaq', 'BlogItemController@removeFaq')->name('removeFaq');
        
        Route::resource('home-images', 'HomeImageController');
        Route::resource('gallery-images', 'GalleryImageController');
        Route::post('gallery-images/deleteImege', 'GalleryImageController@deleteImege');
        Route::post('gallery-images/reorder','GalleryImageController@reorderImeges');
        Route::get('gallery-image/create-pluck','GalleryImageController@createPluck');
        Route::post('gallery-images/uploadImages','GalleryImageController@uploadImages');
        Route::post('gallery-images/removeUploadImages','GalleryImageController@removeUploadImages');
        Route::post('gallery-images/storePluck','GalleryImageController@storePluck');
        Route::resource('testimonials', 'TestimonialController');
        Route::resource('news-letters', 'NewsLetterController');
        Route::resource('projects', 'ProjectController');
        Route::post('projects/uploadImages', 'ProjectController@uploadImages');
        Route::post('projects/removeUploadImages', 'ProjectController@removeUploadImages');
        Route::post('projects/deleteImege', 'ProjectController@deleteImege');
        Route::resource('addresses', 'AddressController');
        Route::resource('gallery-videos', 'GalleryVideoController');
        Route::post('gallery-videos/reorder','GalleryVideoController@reorderVideos');
        Route::resource('seo-assistant', 'SeoAssistantContoller');
        Route::resource('careers', 'CareerContoller');
        

    });
});

Route::group(['middleware'=>['web','localeSessionRedirect', 'localizationRedirect', 'localeViewPath'],'prefix' => LaravelLocalization::setLocale() ],function(){
    Auth::routes();
    Route::get('{slug}/','WebsiteController@checkUrl')->name('checkUrl');
});

//////////// clearing cach and cache config///////
Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('optimize:clear');
    return 'DONE'; //Return anything
});







//////// old auth method via otp////
Route::group(['middleware'=>['web','localeSessionRedirect', 'localizationRedirect', 'localeViewPath'],'prefix' => LaravelLocalization::setLocale() ],function(){

    // Route::get('indvidual-registration/login','FormController@getIndvidualLogin');
    // Route::get('company-registration/login','FormController@getCompaniesLogin');
    // Route::get('indvidual-registration/have-account','FormController@haveIndvidualAccount');
    // Route::get('company-registration/have-account','FormController@haveCompanyAccount');
    // Route::post('indvidual-registration/submit','FormController@indvidualRegistration')->name('indvidualRegistration');
    // Route::post('company-registration/submit','FormController@companyRegistration')->name('companyRegistration');
    // Route::post('indvidual-registration/confirming','FormController@indvidualRegistrationConfirming');
    // Route::post('company-registration/confirming','FormController@companyRegistrationConfirming');



    // Route::get('indvidual-registration/step/{step}','FormController@getIndvidualRegistration')->name('indvidual-registration')->middleware('individual');
    // Route::get('company-registration/step/{step}','FormController@getCompanyRegistration')->name('company-registration')->middleware('company');


    // Route::post('indvidual-registration/update/{id}','FormController@updateRegistration');
    // Route::post('company-registration/update/{id}','FormController@updateCompanyRegistration');

    // Route::post('sendRegistrationIndividualOTP','FormController@sendRegistrationIndividualOTP');
    // Route::get('indvidual-registration/validate-otp','FormController@validateOTPView');
    // Route::post('indvidual_validateOTP','FormController@validateIndvidualOTP');

    // Route::post('sendRegistrationCompanyOTP','FormController@sendRegistrationCompanyOTP');
    // Route::get('company-registration/validate-otp','FormController@validateOTPCompanyView');
    // Route::post('company_validateOTP','FormController@validateCompanyOTP');

});
