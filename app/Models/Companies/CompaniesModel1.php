<?php

namespace App\Models\Companies;

use Illuminate\Database\Eloquent\Model;

class CompaniesModel1 extends Model
{
    protected $table = 'companies_model1';
    public $timestamps = false;
    public function Companies_Model1()
    {
        return $this->belongsTo('App\Models\Companie\Companies','companies_id','id');
    }
}
