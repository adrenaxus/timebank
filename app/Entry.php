<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;

class Entry extends Model
{
	
	use \Spatie\Tags\HasTags;
	
	
	public function is_request() {
	   return $this->type == "request";
	}	
	
	public function is_offer() {
	   return $this->type == "offer";
	}	
	
	
	public function user()
	{
		return $this->belongsTo('App\User');
	}
	
	protected static function boot()
	{
		parent::boot();
		static::creating(function ($entry) {
			if ( !$entry->user_id ) {
				$entry->user_id = Auth::id();
			}
		});
	}	
	
	protected $casts = [
		'expires_at' => 'datetime',
	];	
	
	
}
