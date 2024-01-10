<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\ServiceImage;
use App\Models\Project;
use App\Models\GalleryImage;
use App\Models\Service;

class Service extends Model
{
    //
    
    public function images(){
	    return ServiceImage::where('service_id',$this->id)->get(); 
	}
	
	public function projects(){
	    $serviceIds = Service::where('parent_id',$this->id)->pluck('id')->toArray();
	    array_push($serviceIds, $this->id);
	    
	    return Project::whereIn('service_id',$serviceIds)->where('status',1)->get();
	   
	}
	public function childs(){
		return Service::where('parent_id',$this->id)->where('status',1)->orderBy('order','asc')->get();

	}

	public function faq(){
		return $this->hasMany('App\Model\faq', 'service_id' , 'id');
	}
	
	public function gallaryImages(){
		return GalleryImage::where('sevice_id',$this->id)->get();
	}
}
