<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use DB;
use App\Models\ProjectImage;
class Project extends Model
{
	protected $table='projects';
	
	public function images(){
	    return ProjectImage::where('project_id',$this->id)->get(); 
	}
	
	public function service(){
        return $this->belongsTo('App\Service','service_id','id');
    }

}
