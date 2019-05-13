<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;

class Demand extends Model
{
	
	use \Spatie\Tags\HasTags;
	
	public function user()
	{
		return $this->belongsTo('App\User');
	}
	
	protected static function boot()
	{
		parent::boot();
		static::creating(function ($demand) {
			if ( !$demand->user_id ) {
				$demand->user_id = Auth::id();
			}
		});
	}	
	
	protected $casts = [
		'published_at' => 'datetime',
	];	
}
