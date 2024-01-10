<?php

namespace App\Models\Companies;

use Illuminate\Database\Eloquent\Model;

class CompaniesModel4 extends Model
{
    protected $table = 'companies_model4';
    public $timestamps = false;
    public function Companies_Model4()
    {
        return $this->belongsTo('App\Models\Companie\Companies','companies_id','id');
    }
}
