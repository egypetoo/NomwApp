<?php

namespace App\Models\Individuals;

use Illuminate\Database\Eloquent\Model;

class IndividualsSourceIncome extends Model
{
    protected $table = 'individuals_source_income';
    public $timestamps = false;
    public function Individuals_Source_Income()
    {
        return $this->belongsTo('App\Models\Individuals\Individuals','individuals_id','id');
    }

}
