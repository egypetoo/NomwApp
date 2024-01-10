<?php

namespace App\Models\Individuals;

use Illuminate\Database\Eloquent\Model;

class IndividualsModel6 extends Model
{
    protected $table = 'individuals_model6';
    public $timestamps = false;
    public function Individuals_Model6()
    {
        return $this->belongsTo('App\Models\Individuals\Individuals','individuals_id','id');
    }

}
