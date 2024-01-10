<?php

namespace App\Models\Companies;

use Illuminate\Database\Eloquent\Model;

class CompaniesPersonAuthorized extends Model
{
    protected $table = 'companies_person_authorized';
    public $timestamps = false;
    public function Companies_Person_Authorized()
    {
        return $this->belongsTo('App\Models\Companie\Companies','companies_id','id');
    }
}
