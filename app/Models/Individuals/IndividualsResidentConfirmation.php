<?php

namespace App\Models\Individuals;

use Illuminate\Database\Eloquent\Model;

class IndividualsResidentConfirmation extends Model
{
    protected $table = 'individuals_resident_confirmation';
    public $timestamps = false;
    public function IndividualsResidentConfirmation()
    {
        return $this->belongsTo('App\Models\Individuals\Individuals','individuals_id','id');
    }

}
