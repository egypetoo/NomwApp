<?php

namespace App\Models\Companies;

use Illuminate\Database\Eloquent\Model;

class CompaniesLegalForm extends Model
{
    protected $table = 'companies_legal_form';
    public $timestamps = false;
    public function Companies_LegalForm()
    {
        return $this->belongsTo('App\Models\Companie\Companies','companies_id','id');
    }
}
