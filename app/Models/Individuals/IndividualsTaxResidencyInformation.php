<?php

namespace App\Models\Individuals;

use Illuminate\Database\Eloquent\Model;

class IndividualsTaxResidencyInformation extends Model
{
    protected $table = 'individuals_tax_residency_information';
    public $timestamps = false;
    public function Individuals_Residency_Information()
    {
        return $this->belongsTo('App\Models\Individuals\Individuals','individuals_id','id');
    }

        // get data from database
        public function getResidency_no_tax_identfire_num(){
            if($this->residency_no_tax_identfire_num == 'a'){
                return trans('form.a. The country/jurisdiction in which the Account Holder resides does not issue TINs to residents');
            }elseif($this->residency_no_tax_identfire_num == 'b'){
                return trans('form.B. Otherwise, the account holder is unable to obtain a TIN or equivalent number');
            }else{
                return trans('form.A tax identification number is not required. (Note: Select this reason only if the local law of the relevant jurisdiction does not require a TIN issued by that jurisdiction.');
            }
        }

}
