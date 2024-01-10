<?php

namespace App\Models\Individuals;

use Illuminate\Database\Eloquent\Model;

class IndividualsManagerApproval extends Model
{
    protected $table = 'individuals_manager_approval';
    public $timestamps = false;
    public function Individuals_Manager_Approval()
    {
        return $this->belongsTo('App\Models\Individuals\Individuals','individuals_id','id');
    }

}
