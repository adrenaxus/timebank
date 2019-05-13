<?php

namespace App\Listeners;

use App\Events\TransactionButtonClick;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Auth as Auth;
use App\User;

class ConfirmTransaction
{
	
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  TransactionButtonClick  $event
     * @return void
     */
    public function handle(TransactionButtonClick $event)
    {
		
		
		$event->transaction->confirmed = 1;
		
		$receiving_user = Auth::user();
		$receiving_user->credit -= $event->transaction->minutes;
		
		
		$giving_user = User::find($event->transaction->giving_user_id);
		$giving_user->credit += $event->transaction->minutes;
		
		$giving_user->save();
		$receiving_user->save();
		
		
		
		$event->transaction->save();		
		
		
    }
}
