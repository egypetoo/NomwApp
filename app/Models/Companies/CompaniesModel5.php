<?php

namespace App\Models\Companies;

use Illuminate\Database\Eloquent\Model;

class CompaniesModel5 extends Model
{
    protected $table = 'companies_model5';
    public $timestamps = false;
    public function Companies_Model5()
    {
        return $this->belongsTo('App\Models\Companie\Companies','companies_id','id');
    }
}
