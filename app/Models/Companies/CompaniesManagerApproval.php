<?php

namespace App\Models\Companies;

use Illuminate\Database\Eloquent\Model;

class CompaniesManagerApproval extends Model
{
    protected $table = 'companies_manager_approval';
    public $timestamps = false;
    public function Companies_Manager_Approval()
    {
        return $this->belongsTo('App\Models\Companie\Companies','companies_id','id');
    }
}
