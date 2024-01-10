<?php

namespace App\Models\Companies;

use Illuminate\Database\Eloquent\Model;

class CompaniesMoneyLaunderingRisks extends Model
{
    protected $table = 'companies_money_laundering_risks';
    public $timestamps = false;
    public function Companies_LaunderingRisks()
    {
        return $this->belongsTo('App\Models\Companie\Companies','companies_id','id');
    }
    // get data from database
    public function getLaundering_is_political_person(){
        return $this->laundering_is_political_person == 1 ? trans('form.yes') : trans('form.no');
    }
    public function getLaundering_geographical_risk(){
        return $this->laundering_geographical_risk == 1 ? trans('form.yes') : trans('form.no');
    }
    public function getLaundering_invest_mony_own(){
        return $this->laundering_invest_mony_own == 1 ? trans('form.yes') : trans('form.no');
    }
    public function getLaundering_invest_mony_other(){
        return $this->laundering_invest_mony_other == 1 ? trans('form.yes') : trans('form.no');
    }
    public function getLaundering_high_risk_work(){
        return $this->laundering_high_risk_work == 1 ? trans('form.yes') : trans('form.no');
    }
    public function getLaundering_activity_secondry_income(){
        return $this->laundering_activity_secondry_income == 1 ? trans('form.yes') : trans('form.no');
    }
    public function getLaundering_client_background_services(){
        return $this->laundering_client_background_services == 1 ? trans('form.yes') : trans('form.no');
    }
    public function getLaundering_final_risk_level(){
        if($this->laundering_final_risk_level == 'high'){
            return trans('form.High stakes');
        }elseif($this->laundering_final_risk_level == 'average'){
            return trans('form.average risk');
        }elseif($this->laundering_final_risk_level == 'low'){
            return trans('form.Low risk');
        }elseif($this->laundering_final_risk_level == 'political_person'){
            return trans('form.political person');
        }else{
            return trans('form.other');
        }
    }
}






