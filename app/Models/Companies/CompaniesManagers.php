<?php

namespace App\Models\Companies;

use Illuminate\Database\Eloquent\Model;

class CompaniesManagers extends Model
{
    protected $table = 'companies_managers';
    public $timestamps = false;
    public function Companies_Managers()
    {
        return $this->belongsTo('App\Models\Companie\Companies','companies_id','id');
    }
}
