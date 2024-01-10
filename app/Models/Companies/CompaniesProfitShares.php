<?php

namespace App\Models\Companies;

use Illuminate\Database\Eloquent\Model;

class CompaniesProfitShares extends Model
{
    protected $table = 'companies_profit_shares';
    public $timestamps = false;
    public function Companies_Profit_Shares()
    {
        return $this->belongsTo('App\Models\Companie\Companies','companies_id','id');
    }
}
