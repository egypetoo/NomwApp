<?php

namespace App\Models\Individuals;

use Illuminate\Database\Eloquent\Model;

class IndividualsModel7 extends Model
{
    protected $table = 'individuals_model7';
    public $timestamps = false;
    public function Individuals_Model7()
    {
        return $this->belongsTo('App\Models\Individuals\Individuals','individuals_id','id');
    }

}
