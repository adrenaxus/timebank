<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;

class Transaction2 extends Model
{
	
	use \Spatie\Tags\HasTags;
	
	protected $table = 'transactions';
	
	public function giving_user()
	{
		return $this->belongsTo('App\User');
	}
	
	public function receiving_user()
	{
		return $this->belongsTo('App\User', 'receiving_user_id');
	}	
	
	public function offer()
	{
		return $this->belongsTo('App\Offer');
	}	
	
	
	protected static function boot()
	{
		parent::boot();
		static::creating(function ($transaction) {
			if ( !$transaction->giving_user_id ) {
				$transaction->giving_user_id = Auth::id();
			}
		});
		
		
		
		// only admins can create transactions2s. set always as confirmed
		static::saving(function ($query) {
			$query->confirmed = 1;
		});		
		
	}

	
	protected $casts = [
		'expires_at' => 'datetime',
		'when' => 'datetime',
	];		
}
