<?php

namespace App\Nova;

use Laravel\Nova\Fields\ID;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Gravatar;
use Laravel\Nova\Fields\Password;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Avatar;
use Laravel\Nova\Fields\Date;
use Laravel\Nova\Fields\Number;
use Spatie\TagsField\Tags;

class User extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = 'App\\User';
	
	
	/**
	 * Get the displayable label of the resource.
	 *
	 * @return string
	 */
	public static function label()
	{
		return __('Users');
	}

	/**
	 * Get the displayable singular label of the resource.
	 *
	 * @return string
	 */
	public static function singularLabel()
	{
		return __('User');
	}			
	


    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'name';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id', 'name', 'email',
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            ID::make()->sortable(),
			
			Select::make(__('Language'), 'language')
				->options([
					'de' => 'Deutsch',
					'ld' => 'Ladin',
					'it' => 'Italiano',
				])
				->rules('required')
				->help(
					__('help.Language')
				),				

            Text::make(__('Name'), 'name')
                ->sortable()
                ->rules('required', 'max:255'),
				
			Date::make(__('Birthday'), 'birthday')
				->firstDayOfWeek(1)
				->format('DD.MM.YYYY')
				->rules('required')
				->sortable(),
				
            Text::make(__('Telephone'), 'telephone')
                ->sortable()
                ->rules('required', 'max:255')
				->help(
					__('help.Telephone')
				),								
				
				
			Number::make(__('Minutes'), 'credit')
					->min(-1200)
					->max(1200)
					->rules('required')
					->step(30)			
					->sortable()
					->canSee(function ($request) {
						return $request->user()->role == 'admin';
					}),				
				
				
			Tags::make(__('FavoriteTags'), 'tags')
				->rules('required')
				->help(
					__('help.FavoriteTags')
				),
				
			Avatar::make(__('Avatar'), 'avatar'),						

            Text::make(__('Email'), 'email')
                ->sortable()
                ->rules('required', 'email', 'max:254')
                ->creationRules('unique:users,email')
                ->updateRules('unique:users,email,{{resourceId}}')
				->help(
					__('help.Email')
				),								

            Password::make(__('Password'), 'password')
                ->onlyOnForms()
                ->creationRules('required', 'string', 'min:6')
                ->updateRules('nullable', 'string', 'min:6')
				->help(
					__('help.Password')
				),								
				
            //remove role from user edit page to avoid confusion when admins submit new user
            /*
			Select::make(__('Role'), 'role')
				->options([
					'admin' => 'Admin',
					'user' => 'User',
				])
				->canSee(function ($request) {
					return $request->user()->role == 'admin';
				})		
				->sortable()
            */				
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function cards(Request $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function filters(Request $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function lenses(Request $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function actions(Request $request)
    {
        return [];
    }
}
