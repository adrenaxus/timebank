<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
	use \Spatie\Tags\HasTags;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
	
	
	//posts
	public function offers()
	{
		return $this->hasMany('App\Offer');
	}	
	
	//posts
	public function demands()
	{
		return $this->hasMany('App\Demand');
	}		
	
	//transactions
	public function transactions()
	{
		return $this->hasMany('App\Transaction');
	}			
	
	protected $casts = [
		'birthday' => 'datetime',
	];	
	
	
}
