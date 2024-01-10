<?php

namespace App\Models\Individuals;

use Illuminate\Database\Eloquent\Model;

class IndividualsPerContacts extends Model
{
    protected $table = 'individuals_per_contacts';
    public $timestamps = false;
    public function Individuals_contacts()
    {
        return $this->belongsTo('App\Models\Individuals\Individuals','individuals_id','id');
    }


    // get data from database
    public function getNational_address_sender_type(){
        if($this->national_address_sender_type == 'text'){
            return trans('form.Text message');
        }elseif($this->national_address_sender_type == 'sms'){
            return trans('form.mail');
        }elseif($this->national_address_sender_type == 'email'){
            return trans('form.e-mail');
        }else{
            return trans('form.no limitation');
        }
    }
    
    public function getNational_address_sender_lang(){
        if($this->national_address_sender_lang == 'ar'){
            return trans('form.ar');
        }elseif($this->national_address_sender_lang == 'en'){
            return trans('form.en');
        }else{
            return trans('form.no limitation');
        }
    }

}
