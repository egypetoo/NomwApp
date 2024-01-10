<?php

namespace App\Models\Individuals;

use Illuminate\Database\Eloquent\Model;

class IndividualsRegistrationBeneficiary extends Model
{
    protected $table = 'individuals_registration_beneficiary';
    public $timestamps = false;
    public function Individuals_Beneficiary()
    {
        return $this->belongsTo('App\Models\Individuals\Individuals','individuals_id','id');
    }

    // get data from database
    public function getBeneficiary_status(){
        if($this->beneficiary_status == 'agent'){
            return trans('form.agent');
        }elseif($this->beneficiary_status == 'legal_representative'){
            return trans('form.The legal representative of the seized person');
        }elseif($this->beneficiary_status == 'executor'){
            return trans('form.executor');
        }elseif($this->beneficiary_status == 'personal_reference'){
            return trans('form.personal_reference');
        }
        elseif($this->beneficiary_status == 'judicial_guard'){
            return trans('form.judicial_guard');
        }else{
            return trans('form.other');
        }
    }

}
