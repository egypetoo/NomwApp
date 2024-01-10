<?php

namespace App\Models\Individuals;

use Illuminate\Database\Eloquent\Model;

class IndividualsCertificates extends Model
{
    protected $table = 'individuals_certificates';
    public $timestamps = false;
    public function Individuals_Certificates()
    {
        return $this->belongsTo('App\Models\Individuals\Individuals','individuals_id','id');
    }

}
