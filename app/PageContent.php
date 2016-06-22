<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PageContent extends Model
{
	protected $fillable = ['title' , 'content' , 'page_id'];

    public function page()
    {
    	return $this->belongsTo('App\Page');
    }
}
