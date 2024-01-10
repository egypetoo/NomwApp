<?php

namespace App\Models\Companies;

use Illuminate\Database\Eloquent\Model;

class CompaniesBank extends Model
{
    protected $table = 'companies_bank';
    public $timestamps = false;
    public function Companies_Bank()
    {
        return $this->belongsTo('App\Models\Companie\Companies','companies_id','id');
    }
}
