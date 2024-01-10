<?php

namespace App\Models\Companies;

use Illuminate\Database\Eloquent\Model;

class CompaniesOwnershipStructure extends Model
{
    protected $table = 'companies_ownership_structure';
    public $timestamps = false;
    public function Companies_Ownership_Structure()
    {
        return $this->belongsTo('App\Models\Companie\Companies','companies_id','id');
    }
}
