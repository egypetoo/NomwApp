<?php

namespace App\Models\Individuals;

use Illuminate\Database\Eloquent\Model;

class IndividualsSaleProceeds extends Model
{
    protected $table = 'individuals_sale_proceeds';
    public $timestamps = false;
    public function Individuals_Sale_Proceeds()
    {
        return $this->belongsTo('App\Models\Individuals\Individuals','individuals_id','id');
    }

}
