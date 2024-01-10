<?php

namespace App\Models\Individuals;

use Illuminate\Database\Eloquent\Model;

class IndividualsTaxAssessor extends Model
{
    protected $table = 'individuals_tax_assessor';
    public $timestamps = false;
    public function Individuals_Assessor()
    {
        return $this->belongsTo('App\Models\Individuals\Individuals','individuals_id','id');
    }

}
