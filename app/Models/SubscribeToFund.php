<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubscribeToFund extends Model
{
    protected $table = 'subscribe_to_funds';
	public function individual()
    {
        return $this->belongsTo('App\Individuals\Individual','individual_id','id');
    }

}
