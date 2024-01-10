<?php

namespace App\Models\Companies;

use Illuminate\Database\Eloquent\Model;

class CompaniesSaleProceeds extends Model
{
    protected $table = 'companies_sale_proceeds';
    public $timestamps = false;
    public function Companies_Sale_Proceeds()
    {
        return $this->belongsTo('App\Models\Companie\Companies','companies_id','id');
    }
}
