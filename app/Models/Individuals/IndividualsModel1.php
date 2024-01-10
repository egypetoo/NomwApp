<?php

namespace App\Models\Individuals;

use Illuminate\Database\Eloquent\Model;

class IndividualsModel1 extends Model
{
    protected $table = 'individuals_model1';
    public $timestamps = false;
    public function Individuals_Model1()
    {
        return $this->belongsTo('App\Models\Individuals\Individuals','individuals_id','id');
    }

}
