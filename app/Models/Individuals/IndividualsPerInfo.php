<?php

namespace App\Models\Individuals;

use Illuminate\Database\Eloquent\Model;

class IndividualsPerInfo extends Model
{
    protected $table = 'individuals_per_info';
    public $timestamps = false;
    public function Individuals_Info()
    {
        return $this->belongsTo('App\Models\Individuals\Individuals','individuals_id','id');
    }

    // get data from database
    public function getGender(){
        return $this->gender == 'male' ? trans('form.male') : trans('form.female');
    }

    public function getPersonality_id(){
        if($this->personality_id == 'ssn'){
            return trans('form.national_id');
        }elseif($this->personality_id == 'passport'){
            return trans('form.passport');
        }elseif($this->personality_id == 'resident'){
            return trans('form.Accommodation');
        }else{
            return trans('form.other');
        }
    }
    public function getSocial_status(){
        return $this->social_status == 'single' ? trans('form.single') : trans('form.marred');
    }
    


}
