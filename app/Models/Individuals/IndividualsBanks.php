<?php

namespace App\Individuals;

use Illuminate\Database\Eloquent\Model;

class IndividualsBanks extends Model
{
    protected $table = 'individuals_banks';
    public $timestamps = false;
    public function Individuals_Banks()
    {
        return $this->belongsTo('App\Models\Individuals\Individuals','individuals_id','id');
    }

}
