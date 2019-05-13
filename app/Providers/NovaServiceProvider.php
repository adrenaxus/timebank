<?php

namespace App\Providers;

use Laravel\Nova\Nova;
use Laravel\Nova\Cards\Help;
use Illuminate\Support\Facades\Gate;
use Laravel\Nova\NovaApplicationServiceProvider;
use App\Nova\Metrics\UsersPerDay;
use App\Nova\Metrics\NewUsers;
use App\Nova\Metrics\UsersPerPlan;
use App\Nova\Metrics\EntriesPerType;
use Dniccum\CustomEmailSender\CustomEmailSender;
use App\User;
use App;
use Auth;

class NovaServiceProvider extends NovaApplicationServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();
		
		//set locale to the user choice
		Nova::serving(function () {
			App::setLocale(Auth::user()->language);
		});		
		
		//custom style for backend
		Nova::style('novaCustom', public_path('css/novaCustom.css'));
		Nova::script('novaCustom', 'http://68.183.71.90/js/novaCustom.js'); //needed to avoid creation of tags and disabling enter key on tag inputs
    }

    /**
     * Register the Nova routes.
     *
     * @return void
     */
    protected function routes()
    {
        Nova::routes()
                ->withAuthenticationRoutes()
                ->withPasswordResetRoutes()
                ->register();
    }

    /**
     * Register the Nova gate.
     *
     * This gate determines who can access Nova in non-local environments.
     *
     * @return void
     */
    protected function gate()
    {
        Gate::define('viewNova', function ($user) {
            return in_array($user->email, [
                //
            ]);
        });
    }

    /**
     * Get the cards that should be displayed on the Nova dashboard.
     *
     * @return array
     */
    protected function cards()
    {
		return 
			[
				(new UsersPerDay)->canSee(function ($request) {
					//return $request->user()->role == 'admin';
					return true;
				}),			
				(new EntriesPerType)->canSee(function ($request) {
					//return $request->user()->role == 'admin';
					return true;
				}),							
				(new NewUsers)->canSee(function ($request) {
					//return $request->user()->role == 'admin';
					return true;
				}),			
				(new UsersPerPlan)->canSee(function ($request) {
					return $request->user()->role == 'admin';
				}),									
			];
    }

    /**
     * Get the tools that should be listed in the Nova sidebar.
     *
     * @return array
     */
    public function tools()
    {
		
		return [
			(new CustomEmailSender)->canSee(function ($request) {
				return $request->user()->role == 'admin';
			}),
		];		
		
		
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
