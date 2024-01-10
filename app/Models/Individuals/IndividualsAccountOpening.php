<?php

namespace App\Models\Individuals;

use Illuminate\Database\Eloquent\Model;

class IndividualsAccountOpening extends Model
{
    protected $table = 'individuals_account_opening';
    public $timestamps = false;

    public function Individuals_AccountOpening()
    {
        return $this->belongsTo('App\Models\Individuals\Individuals','individuals_id','id');
    }
    
    // get data from database
    public function getAccount_opening_set(){
        if($this->account_opening_set == 'a'){
            return trans('form.The original ID has been reviewed and the photos have been authenticated');
        }elseif($this->account_opening_set == 'b'){
            return trans('form.Agency or other authorization order');
        }elseif($this->account_opening_set == 'c'){
            return trans('form.Know your customer');
        }else{
            return trans('form.Customer acceptance form');
        }
    }
}
