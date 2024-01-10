<?php

namespace App\Models\Companies;

use Illuminate\Database\Eloquent\Model;

class CompaniesModel2 extends Model
{
    protected $table = 'companies_model2';
    public $timestamps = false;
    public function Companies_Model2()
    {
        return $this->belongsTo('App\Models\Companie\Companies','companies_id','id');
    }
}
