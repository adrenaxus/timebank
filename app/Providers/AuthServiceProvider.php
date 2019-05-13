<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

use App\User;
use App\Policies\UserPpolicy;
use App\Transaction;
use App\Policies\TransactionPolicy;
use App\Entry;
use Spatie\Tags\Tag;
use App\Policies\EntryPolicy;
use App\Policies\TagPolicy;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
		Entry::class => EntryPolicy::class,
		Transaction::class => TransactionPolicy::class,
		Transaction2::class => Transaction2Policy::class,
		Tag::class => 'App\Policies\TagPolicy',
		User::class => 'App\Policies\UserPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
    }
}
