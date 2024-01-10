@extends('layouts.admin')
@section('meta')
    <title>{{trans('home.edit_menu_item')}}</title>
@endsection
@section('content')

<div class="container-fluid">

        <!-- Page Header -->
        <div class="page-header">
            <div>
                <h2 class="main-content-title tx-24 mg-b-5">{{trans('home.menu_items')}}</h2>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/admin')}}">{{trans('home.admin')}}</a></li>
                    <li class="breadcrumb-item"><a href="{{url('admin/menus')}}">{{trans('home.menu_items')}}</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{trans('home.edit_menu_item')}}</li>
                </ol>
            </div>
        </div>
        <!-- End Page Header -->
        
        <!-- Row-->
        <div class="row">
            <div class="col-sm-12 col-xl-12 col-lg-12">
                <div class="card custom-card overflow-hidden">
    
                    <div class="card-body">
                        <div>
                            <h6 class="card-title mb-1">{{trans('home.edit_menu_item')}}</h6>
                        </div>
                        {!! Form::open(['method'=>'PATCH','url' => 'admin/menu-items/'.$menuItem->id, 'data-toggle'=>'validator', 'files'=>'true']) !!}
                            <div class="row">

                                <div class="form-group col-md-3">
                                    <label class="">{{trans('home.name_en')}}</label>
                                    <input class="form-control" name="name_en" type="text" placeholder="{{trans('home.name_en')}}" value="{{$menuItem->name_en}}" required>
                                </div>

                                <div class="form-group col-md-3">
                                    <label class="">{{trans('home.name_ar')}}</label>
                                    <input class="form-control" name="name_ar" type="text" placeholder="{{trans('home.name_ar')}}" value="{{$menuItem->name_ar}}" required>
                                </div>

                                <div class="form-group col-md-3"> 
                                    <label for="parent">{{trans('home.parent')}}</label>
                                    <select class="form-control select2 parent" name="parent">
                                        <option value ="0">{{trans('home.no_parent')}}</option>
                                        @foreach($menuParents as $menuParent)
                                            <option value="{{$menuParent->id}}" {{($menuParent->id == $menuItem->parent_id)?'selected':''}}>@if(app()->getLocale() == 'en') {{ $menuParent->name_en}} @else {{ $menuParent->name_ar}} @endif</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group col-md-3"> 
                                    <fieldset class="form-group">
                                        <label for="order">{{trans('home.order')}}</label>
                                        <input type="number" min="1"  class="form-control" placeholder="{{trans('home.order')}}" name="order" value="{{$menuItem->order}}" required>
                                    </fieldset>
                                </div>

                                <div class="form-group col-md-12">
                                    <div class="row"> 
                                        <div class="form-group col-md-4"> 
                                            <label for="menu">{{trans('home.menu')}}</label>
                                            <select class="form-control select2 menu" name="menu_id">
                                                @foreach($menus as $menu)
                                                    <option value="{{$menu->id}}" {{($menu->id == $menuItem->menu_id)?'selected':''}}>{{(app()->getLocale() == 'en')?$menu->name_en:$menu->name_ar}}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group col-md-4"> 
                                            <label for="menu_type">{{trans('home.menu_type')}}</label>
                                            <select class="form-control select2 menu_type" name="menu_type" required>
                                                <option></option>
                                                <option value="main-item" {{($menuItem->type == 'main-item')?'selected':''}}>{{trans('home.main-item')}}</option>
                                                <option value="home" {{($menuItem->type == 'home')?'selected':''}}>{{trans('home.home')}}</option>
                                                <option value="indvidual-registration/login" {{($menuItem->type == 'about-us')?'selected':''}}>{{trans('home.about-us')}}</option>
                                                <option value="contact-us" {{($menuItem->type == 'contact-us')?'selected':''}}>{{trans('home.contact-us')}}</option>
                                                <!--<option value="board-of-members" {{($menuItem->type == 'board-of-members')?'selected':''}}>{{trans('home.boardofmembers')}}</option>-->
                                                <option value="categories" {{($menuItem->type == 'categories')?'selected':''}}>{{trans('home.categories')}}</option>
                                                <option value="career" {{($menuItem->type == 'career')?'selected':''}}>{{trans('home.career')}}</option>
                                                <option value="category" {{($menuItem->type == 'category')?'selected':''}}>{{trans('home.category')}}</option>
                                                <option value="projects" {{($menuItem->type == 'projects')?'selected':''}}>{{trans('home.projects')}}</option>
                                                <option value="project" {{($menuItem->type == 'project')?'selected':''}}>{{trans('home.project')}}</option>
                                                <option value="services" {{($menuItem->type == 'services')?'selected':''}}>{{trans('home.services')}}</option>
                                                <option value="service" {{($menuItem->type == 'service')?'selected':''}}>{{trans('home.service')}}</option>
                                                <option value="galleryImages" {{($menuItem->type == 'galleryImages')?'selected':''}}>{{trans('home.galleryImages')}}</option>
                                                <option value="certificates" {{($menuItem->type == 'certificates')?'selected':''}}>{{trans('home.certificates')}}</option>
                                                <option value="company-registration/login" {{($menuItem->type == 'galleryVideos')?'selected':''}}>{{trans('home.galleryVideos')}}</option>
                                                <option value="brand" {{($menuItem->type == 'brand')?'selected':''}}>{{trans('home.brand')}}</option>
                                                <option value="pages" {{($menuItem->type == 'pages')?'selected':''}}>{{trans('home.pages')}}</option>
                                                <option value="blogs" {{($menuItem->type == 'blogs')?'selected':''}}>{{trans('home.blogs')}}</option>
                                                <option value="blog-category" {{($menuItem->type == 'blog-category')?'selected':''}}>{{trans('home.blog-category')}}</option>
                                                <option value="blog-item" {{($menuItem->type == 'blog-item')?'selected':''}}>{{trans('home.blog-item')}}</option>
                                                <option value="link" {{($menuItem->type == 'link')?'selected':''}}>{{trans('home.link')}}</option>
                                            </select>
                                        </div>

                                        <div class="form-group col-md-4"> 
                                            <div class="type_values">

                                            @if($menuItem->type == 'product' || $menuItem->type == 'brand' || $menuItem->type == 'category')
                                                <fieldset class="form-group">
                                                    <label for="blog_categories">{{trans("home.$menuItem->type")}}</label>
                                                    <select class="form-control select2 type_value" name="type_value"  id="type_value">
                                                        @foreach($values as $value)
                                                            <option value="{{$value -> id}}" {{($menuItem->type_value == $value->id)?'selected':''}}>@if(app()->getLocale() == 'en') {{$value -> name_en}} @else {{$value -> name_ar}}@endif</option>
                                                        @endforeach
                                                    </select>
                                                </fieldset>
                                            @elseif($menuItem->type == 'blog-category' || $menuItem->type == 'blog-item' ||$menuItem->type == 'pages' ||$menuItem->type == 'service' ||$menuItem->type == 'project')
                                                <fieldset class="form-group">
                                                    <label for="blog_categories">{{trans("home.$menuItem->type")}}</label>
                                                    <select class="form-control select2 type_value" name="type_value"  id="type_value">
                                                        @foreach($values as $value)
                                                            <option value="{{$value -> id}}" {{($menuItem->type_value == $value->id)?'selected':''}}>@if(app()->getLocale() == 'en') {{$value -> name_en}} @else {{$value -> name_ar}}@endif</option>
                                                        @endforeach
                                                    </select>
                                                </fieldset>   
                                            @elseif($menuItem->type == 'home' || $menuItem->type == 'about-us' || $menuItem->type == 'contact-us' || $menuItem->type =='board-of-members' || $menuItem->type =='galleryImages')
                                              <fieldset class="form-group">
                                              </fieldset>
                                            @elseif($menuItem->type == 'link') 
                                                <fieldset class="form-group">
                                                  <label for="regions">{{trans('home.link')}}</label>
                                                  <input type="text" class="form-control type_value" placeholder="{{trans('home.link')}}" name="type_value" value="{{$menuItem->type_value}}">
                                                </fieldset>
                                            @endif

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="menu">{{trans('home.meta_keywords')}}</label>
                                    <textarea class="form-control " name="meta_keywords" placeholder="{{trans('home.meta_keywords')}}" >{{$menuItem->meta_keywords}}</textarea>
                                </div>

                                <div class="form-group col-md-6"> 
                                    <label for="menu">{{trans('home.meta_description')}}</label>
                                    <textarea class="form-control " name="meta_description" placeholder="{{trans('home.meta_description')}}" >{{$menuItem->meta_description}}</textarea>
                                </div>

                                <div class="form-group col-md-12">
                                  <label class="ckbox">
                                      <input name="status" value="1" {{($menuItem->status == 1)? 'checked':''}} type="checkbox"><span class="tx-13">{{trans('home.publish')}}</span>
                                  </label>
                              </div>

                                <div class="form-group col-md-12">
                                    <button type="submit" class="btn btn-success"><i class="icon-note"></i> {{trans('home.save')}} </button>
                                    <a href="{{url('/admin/menu-items')}}"><button type="button" class="btn btn-danger mr-1"><i class="icon-trash"></i> {{trans('home.cancel')}}</button></a>
                                </div>
                                
                            </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
        <!-- End Row -->
    </div>

@endsection
@section('script')
    <script>
        $('.status').select2();
        $('.menu').select2();
        $('.menu_type').select2({
            'placeholder' : "{{trans('home.choose_menu_type')}}",
        });
        $('.parent').select2();


    </script>
@endsection