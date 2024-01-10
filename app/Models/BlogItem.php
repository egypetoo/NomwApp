<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlogItem extends Model
{
    //
    protected $table = 'blogitems';
    public function Blogcat()
    {
        return $this->belongsTo('App\BlogCategory','blogcategory_id','id');
    }
    public function faq(){
		return $this->hasMany('App\faq', 'blog_item_id' , 'id');
	}
}
