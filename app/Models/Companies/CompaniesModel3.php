<?php

namespace App\Models\Companies;

use Illuminate\Database\Eloquent\Model;

class CompaniesModel3 extends Model
{
    protected $table = 'companies_model3';
    public $timestamps = false;
    public function Companies_Model3()
    {
        return $this->belongsTo('App\Models\Companie\Companies','companies_id','id');
    }
    // get data from database
    public function getModel3_specific_american_person(){
        return $this->model3_specific_american_person == 1 ? trans('form.yes') : trans('form.no');
    }
    public function getModel3_is_saudi_financial(){
        return $this->model3_is_saudi_financial == 1 ? trans('form.yes') : trans('form.no');
    }
    public function getModel3_non_us_financial(){
        return $this->model3_non_us_financial == 1 ? trans('form.yes') : trans('form.no');
    }
    public function getModel3_obligated_register(){
        return $this->model3_obligated_register == 1 ? trans('form.yes') : trans('form.no');
    }
    public function getModel3_obliged_comply(){
        return $this->model3_obliged_comply == 1 ? trans('form.yes') : trans('form.no');
    }
    public function getModel3_not_participating(){
        return $this->model3_not_participating == 1 ? trans('form.yes') : trans('form.no');
    }
    public function getModel3_exempt_beneficiary(){
        return $this->model3_exempt_beneficiary == 1 ? trans('form.yes') : trans('form.no');
    }
    public function getModel3_exempt_foreign_entities(){
        return $this->model3_exempt_foreign_entities == 1 ? trans('form.yes') : trans('form.no');
    }
    public function getModel3_active_foreign_entities(){
        return $this->model3_active_foreign_entities == 1 ? trans('form.yes') : trans('form.no');
    }
    public function getModel3_notactive_foreign_entities(){
        return $this->model3_notactive_foreign_entities == 1 ? trans('form.yes') : trans('form.no');
    }
    public function getModel3_tax_identification_num(){
        return $this->model3_tax_identification_num == 1 ? trans('form.yes') : trans('form.no');
    }
    
}
