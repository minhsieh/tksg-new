<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
	public function users()
	{
		return $this->belongsToMany('App\User','user_pages','page_id','user_id');
	}
}
