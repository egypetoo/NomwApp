<?php

namespace App\Models\Individuals;

use Illuminate\Database\Eloquent\Model;

class IndividualsAttachment extends Model
{
    protected $table = 'individuals_attachment';
    public $timestamps = false;
    public function Individuals_Attachment()
    {
        return $this->belongsTo('App\Models\Individuals\Individuals','individuals_id','id');
    }

}
