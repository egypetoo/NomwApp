<?php

namespace App\Models\Companies;

use Illuminate\Database\Eloquent\Model;

class CompaniesBoardMembers extends Model
{
    protected $table = 'companies_board_members';
    public $timestamps = false;
    public function Companies_Board_Members()
    {
        return $this->belongsTo('App\Models\Companie\Companies','companies_id','id');
    }
}
