<?php

namespace App\Nova;

use Laravel\Nova\Fields\ID;
use Illuminate\Http\Request;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Date;
use Laravel\Nova\Fields\Trix;
use Laravel\Nova\Fields\Boolean;
use Spatie\TagsField\Tags;
use NovaButton\Button;

class Transaction extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = 'App\Transaction';
	
	
	/**
	 * Get the displayable label of the resource.
	 *
	 * @return string
	 */
	public static function label()
	{
		return __('transactions_give');
	}

	/**
	 * Get the displayable singular label of the resource.
	 *
	 * @return string
	 */
	public static function singularLabel()
	{
		return __('transaction_give');
	}		

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'id';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id',
    ];
	
	
	/**
	 * Build an "index" query for the given resource.
	 *
	 * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
	 * @param  \Illuminate\Database\Eloquent\Builder  $query
	 * @return \Illuminate\Database\Eloquent\Builder
	 */
	 
	 
	public static function indexQuery(NovaRequest $request, $query)
	{
		if($request->user()->role == "admin")
		{
			return $query;
		}
		if($request->user()->role == "user")
		{
			return $query->where('giving_user_id', $request->user()->id);
		}
	}
	
	//do not allow user to select himself
    public static function relatableUsers(NovaRequest $request, $query)
    {
        return $query->where('id', '!=', $request->user()->id);
    }	
	
	
	

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            //ID::make()->sortable(),
			BelongsTo::make(__('ReceivingUser') . "*", 'receiving_user', 'App\Nova\User')
				->searchable()
				->rules('required')
				->help(
					__('help.ReceivingUser')
				),				
			Tags::make(__('Tags') . "*", 'Tags')
				->limitSuggestions(50)
				->rules('required')
				->sortable()
				->help(
					__('help.Tags')
				),				
			Boolean::make(__('Confirmed'), 'confirmed')
				->hideWHenCreating()
				->hideWhenUpdating(),
			Number::make(__('Minutes') . "*", 'minutes')
				->min(30)
				->max(1000)
				->step(30)
				->rules('required')
                ->canSee(function ($request) {
                    return true;
                })
				->hideWhenUpdating()
				->help(
					__('help.Minutes')
				),				
				
			Date::make(__('When'), 'when')
				->firstDayOfWeek(1)
				->format('DD.MM.YYYY')
				->help(
					__('help.When')
				),
			Trix::make(__('Content'), 'notes')
				->help(
					__('help.Content')
				)
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
