<?php

namespace App\Models\Companies;

use Illuminate\Database\Eloquent\Model;

class CompaniesCustomerAcceptanceForm extends Model
{
    protected $table = 'companies_customer_acceptance_form';
    public $timestamps = false;
    public function Companies_AcceptanceForm()
    {
        return $this->belongsTo('App\Models\Companie\Companies','companies_id','id');
    }
    // get data from database
    public function getAcceptance_form_client_rating(){
        if($this->acceptance_form_client_rating == 'individual'){
            return trans('form.individual client');
        }elseif($this->acceptance_form_client_rating == 'implementation_individual'){
            return trans('form.Individual client implementation-only');
        }elseif($this->acceptance_form_client_rating == 'counterparty'){
            return trans('form.counterparty');
        }elseif($this->acceptance_form_client_rating == 'retail_client'){
            return trans('form.retail client');
        }elseif($this->acceptance_form_client_rating == 'qualified_customer'){
            return trans('form.Qualified customer');
        }else{
            return trans('form.Institutional client');
        }
    }
    public function getAcceptance_form_suitable_for_customer(){
        return $this->acceptance_form_suitable_for_customer == 1 ? trans('form.yes') : trans('form.no');
    }
    public function getAcceptance_form_risk_degree(){
        if($this->acceptance_form_risk_degree == 'low'){
            return trans('form.low');
        }elseif($this->acceptance_form_risk_degree == 'average'){
            return trans('form.average');
        }else{
            return trans('form.high');
        }
    }


    



}







