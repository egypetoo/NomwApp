<?php

namespace App\Models\Companies;

use Illuminate\Database\Eloquent\Model;

class CompaniesContactData extends Model
{
    protected $table = 'companies_contact_data';
    public $timestamps = false;
    public function Companies_ContactData()
    {
        return $this->belongsTo('App\Models\Companie\Companies','companies_id','id');
    }
    // get data from database
    public function getContact_data_correspondence_mechanism(){
        if($this->contact_data_correspondence_mechanism == 'text'){
            return trans('form.Text message');
        }elseif($this->contact_data_correspondence_mechanism == 'sms'){
            return trans('form.mail');
        }elseif($this->contact_data_correspondence_mechanism == 'email'){
            return trans('form.e-mail');
        }else{
            return trans('form.no limitation');
        }
    }
    public function getContact_data_correspondence_lang(){
        if($this->contact_data_correspondence_lang == 'ar'){
            return trans('form.ar');
        }elseif($this->contact_data_correspondence_lang == 'en'){
            return trans('form.en');
        }else{
            return trans('form.no limitation');
        }
    }

}







