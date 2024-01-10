<?php

namespace App\Models\Companies;

use Illuminate\Database\Eloquent\Model;

class CompaniesCertificates extends Model
{
    protected $table = 'companies_certificates';
    public $timestamps = false;
    public function Companies_Certificates()
    {
        return $this->belongsTo('App\Models\Companie\Companies','companies_id','id');
    }
}
