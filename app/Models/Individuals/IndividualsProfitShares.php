<?php

namespace App\Models\Individuals;

use Illuminate\Database\Eloquent\Model;

class IndividualsProfitShares extends Model
{
    protected $table = 'individuals_profit_shares';
    public $timestamps = false;
    public function Individuals_Profit_Shares()
    {
        return $this->belongsTo('App\Models\Individuals\Individuals','individuals_id','id');
    }

}
