<?php

namespace App\Models\Individuals;

use Illuminate\Database\Eloquent\Model;

class IndividualsClientServiceOffers extends Model
{
    protected $table = 'individuals_client_service_offers';
    public $timestamps = false;
    public function Individuals_ServiceOffers()
    {
        return $this->belongsTo('App\Models\Individuals\Individuals','individuals_id','id');
    }

}
