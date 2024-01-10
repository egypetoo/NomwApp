<?php

namespace App\Models\Companies;

use Illuminate\Database\Eloquent\Model;

class CompaniesAttachment extends Model
{
    protected $table = 'companies_attachment';
    public $timestamps = false;
    public function Companies_Attachment()
    {
        return $this->belongsTo('App\Companies\Models\Companies','companies_id','id');
    }
}
