<?php

namespace App\Models\Individuals;

use Illuminate\Database\Eloquent\Model;

class IndividualsModel3 extends Model
{
    protected $table = 'individuals_model3';
    public $timestamps = false;
    public function Individuals_Model3()
    {
        return $this->belongsTo('App\Models\Individuals\Individuals','individuals_id','id');
    }

}
