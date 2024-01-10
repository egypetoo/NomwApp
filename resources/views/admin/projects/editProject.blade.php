@extends('layouts.admin')
@section('meta')
    <title>{{trans('home.edit_project')}}</title>
@endsection

@section('style')
<style>
    img {
        display:block !important;
    }
    .dz-hidden-input{
        position: absolute !important;
        top: 0px !important;
        left: 250px !important;
    }

</style>
<link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/min/dropzone.min.css" rel="stylesheet">
@endsection
@section('content')

<div class="container-fluid">
        <!-- Page Header -->
        <div class="page-header">
            <div>
                <h2 class="main-content-title tx-24 mg-b-5">{{trans('home.projects')}}</h2>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/admin')}}">{{trans('home.admin')}}</a></li>
                    <li class="breadcrumb-item"><a href="{{url('admin/projects')}}">{{trans('home.projects')}}</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{trans('home.edit_project')}}</li>
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
                            <h6 class="card-title mb-1">{{trans('home.edit_project')}}</h6>
                        </div>
                        {!! Form::open(['method'=>'PATCH','url' => 'admin/projects/'.$project->id, 'data-toggle'=>'validator', 'files'=>'true']) !!}
                            <div class="row">

                                <div class="form-group col-md-3">
                                    <label class="">{{trans('home.name_en')}}</label>
                                    <input class="form-control" name="name_en" type="text" placeholder="{{trans('home.name_en')}}" value="{{$project->name_en}}" required>
                                </div>

                                <div class="form-group col-md-3">
                                    <label class="">{{trans('home.name_ar')}}</label>
                                    <input class="form-control" name="name_ar" type="text" placeholder="{{trans('home.name_ar')}}"value="{{$project->name_ar}}" >
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="youtube_link">{{trans('home.youtube_link')}}</label>
                                    <input type="text"  class="form-control" placeholder="{{trans('home.youtube_link')}}" name="youtube_link">
                                </div>
								<div class="form-group col-md-3">
                                    <label for="order">{{trans('home.order')}}</label>
                                    <input type="number" min="0"  class="form-control" placeholder="{{trans('home.order')}}" name="order" value="{{$project->order}}">
                                </div>
                                
                                {{--<div class="form-group col-md-3">
                                    <label for="helperText">{{trans('home.brand')}}</label>
                                    <select class="form-control select2" name="brand_id" required>
                                        @foreach($brands as $brand)
                                            <option value="{{$brand->id}}" {{($brand->id == $project->brand_id)?'selected':''}}>{{(app()->getLocale() == 'en')?$brand->name_en:$brand->name_ar}}</option>
                                        @endforeach
                                    </select>
                                </div>--}}
                                
                                
                                <div class="form-group col-md-6">
                                    <label for="helperText">{{trans('home.type')}}</label>
                                    <select class="form-control select2" name="type" required>
                                        <option value="steelStructure" {{($project->type == 'steelStructure')?'selected':''}}>{{trans('home.steelStructure')}}</option>
                                        <option value="TOWERS" {{($project->type == 'TOWERS')?'selected':''}}>{{trans('home.TOWERS')}}</option>
                                        <option value="SEMI-TRAILERS" {{($project->type == 'SEMI-TRAILERS')?'selected':'SEMI-TRAILERS'}}>{{trans('home.SEMI-TRAILERS')}}</option>
                                        <option value="ELECTRO-MECHANICAL" {{($project->type == 'ELECTRO-MECHANICAL')?'selected':''}}>{{trans('home.ELECTRO MECHANICAL')}}</option>
                                    </select>
                                </div>
                                
                                {{--<div class="form-group col-md-6">
                                    <label for="helperText">{{trans('home.service')}}</label>
                                    <select class="form-control select2" name="service_id" required>
                                        @foreach($services as $service)
                                            <option value="{{$service->id}}" {{($service->id == $project->service_id)?'selected':''}}>{{(app()->getLocale() == 'en')?$service->name_en:$service->name_ar}}</option>
                                        @endforeach
                                    </select>
                                </div>--}}
                                
                                {{--<div class="form-group col-md-3">
                                    <label for="helperText">{{trans('home.category')}}</label>
                                    <select class="form-control select2" name="category_id" required>
                                        @foreach($categories as $category)
                                            <option value="{{$category->id}}" {{($category->id == $project->category_id)?'selected':''}}>{{(app()->getLocale() == 'en')?$category->name_en:$category->name_ar}}</option>
                                        @endforeach
                                    </select>
                                </div>--}}

                                <div class="col-md-4">
                                    <label>{{trans('home.main_image')}}</label>
                                    <div class="input-group mb-1">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"> {{trans('home.upload')}}</span>
                                        </div>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="image">
                                            <label class="custom-file-label" for="inputGroupFile01">{{trans('home.choose_image')}}</label>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="form-group col-md-2">
                                    <label for="alt_img"> {{trans('home.alt_img')}}</label>
                                    <input class="form-control" name="alt_img" type="text" placeholder="{{trans('home.alt_img')}}" value="{{$project->alt_img}}">
                                </div>
                                
                                @if($project->image)
                                    <div class="col-md-12">
                                        <img src="{{url('\uploads\projects\resize200')}}\{{$project->image}}" width="150">
                                    </div>
                                @endif
                                
                                <div class="form-group col-md-6">
                                    <label for="text_en"> {{trans('home.text_en')}}</label>
                                    <textarea class="form-control area1" name="text_en" placeholder="{{trans('home.text_en')}}">{{$project->text_en}}</textarea>
                                </div>
                                
                                <div class="form-group col-md-6">
                                    <label for="text_ar"> {{trans('home.text_ar')}}</label>
                                    <textarea class="form-control area1" name="text_ar" placeholder="{{trans('home.text_ar')}}">{{$project->text_ar}}</textarea>
                                </div>
                                
                                <div class="form-group col-md-6">
                                    <label for="meta_keywords"> {{trans('home.meta_keywords')}}</label>
                                    <textarea class="form-control" name="meta_keywords" placeholder="{{trans('home.meta_keywords')}}">{{$project->meta_keywords}}</textarea>
                                </div>
                                
                                <div class="form-group col-md-6">
                                    <label for="meta_description"> {{trans('home.meta_description')}}</label>
                                    <textarea class="form-control" name="meta_description" placeholder="{{trans('home.meta_description')}}">{{$project->meta_description}}</textarea>
                                </div>
                                
                                <div class="form-group col-md-12">
                                    <hr>
                                    <label for="images">{{trans('home.project_images')}}</label>
                                        <div class="dropzone col-md-12 upload_images">
                                    </div>
                                </div>
                                
                                @if($project->images())
                                    <div class="col-md-12">
                                        <div class="row mb-0">
                                            @foreach($project->images() as $key=>$image)
                                                <div class="col-xs-6 col-sm-2 col-md-2 col-xl-2 mb-2 pl-sm-2 pr-sm-2">
                                                    <img class="img-responsive" src="{{url('uploads/projects/source/'.$image->image)}}" height="150">
                                                    
                                                    <div>
                                                        <a href='#' data-image='{{$image->id}}' class='delete_img_btn' >{{trans('home.delete')}}</a>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                @endif

                                <div class="form-group col-md-12">
                                    <label class="ckbox">
                                        <input name="status" value="1" {{($project->status == 1)? 'checked':''}} type="checkbox"><span class="tx-13">{{trans('home.publish')}}</span>
                                    </label>
                                </div>

                                <div class="form-group col-md-12">
                                    <button type="submit" class="btn btn-success"><i class="icon-note"></i> {{trans('home.save')}} </button>
                                    <a href="{{url('/admin/projects')}}"><button type="button" class="btn btn-danger mr-1"><i class="icon-trash"></i> {{trans('home.cancel')}}</button></a>
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/dropzone.js"></script>
    
    <script type="text/javascript">

        var token = "{{ csrf_token() }}";
        //Dropzone.autoDiscover = true;
        Dropzone.autoDiscover = false;

        $("div.upload_images").dropzone({
            
            addRemoveLinks: true,
            acceptedFiles: ".jpeg,.jpg,.png,.gif,.webp",
            url: "{{ URL::to('admin/projects/uploadImages') }}",

            init: function() {
                this.on("sending", function(file, xhr, formData) {
                    formData.append("projectId", {{$project->id}});
                });
            },
            
            params: {
                _token: token,
                type: 'product_image',
            },

            removedfile: function(file) {

                var fileName = file.name; 
                $.ajaxSetup({ headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') } });
                    $.ajax({
                    type: 'POST',
                    url: "{{ URL::to('admin/projects/removeUploadImages') }}",
                    data: {type:'project_image',name: fileName,request: 'delete'},
                    sucess: function(data){
                        console.log('success: ' + data);
                    }
                });
                var _ref;
                return (_ref = file.previewElement) != null ? _ref.parentNode.removeChild(file.previewElement) : void 0;
            }

        });
        
    
        Dropzone.options.myAwesomeDropzone = {
            paramName: "file", // The name that will be used to transfer the file
            maxFilesize: 3, // MB
            accept: function(file, done) {

            },
        };
        
        
        $('.delete_img_btn').on('click',function(){
            var image = $(this).data('image');
            var projectId={{$project->id}};
            var btn = $(this);
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url:" {{url('admin/projects/deleteImege')}}",
                method:'POST',
                data:{image:image , projectId:projectId },
                success:function(data)
                {
                    location.href = "{{route('projects.edit',$project->id)}}";
                }
            });
        });

    </script>
    
@endsection

