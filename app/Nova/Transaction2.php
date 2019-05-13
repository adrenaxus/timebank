<?php

namespace App\Nova;

use Laravel\Nova\Fields\ID;
use Illuminate\Http\Request;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\Date;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Trix;
use Laravel\Nova\Fields\Boolean;
use Spatie\TagsField\Tags;
use NovaButton\Button;

class Transaction2 extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = 'App\Transaction2';

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
	 * Get the displayable label of the resource.
	 *
	 * @return string
	 */
	public static function label()
	{
		return __('transactions_receive');
	}

	/**
	 * Get the displayable singular label of the resource.
	 *
	 * @return string
	 */
	public static function singularLabel()
	{
		return __('transaction_receive');
	}		
	
	
	
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
			return $query->where('receiving_user_id', $request->user()->id);
		}
	}
	
	
	public static function relatableQuery(NovaRequest $request, $query)
	{
		return $query->where('user_id', $request->user()->id);
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
			Tags::make(__('Tags'), 'Tags')
				->limitSuggestions(50)
				->sortable()
				->rules('required')
				->help(
					__('help.Tags')
				),				
			BelongsTo::make(__('GivingUser'), 'giving_user', 'App\Nova\User')
				->searchable()
				->rules('required')
				->help(
					__('help.GivingUser')
				),				
			BelongsTo::make(__('ReceivingUser'), 'receiving_user', 'App\Nova\User')
				->searchable()
				->rules('required')
				->help(
					__('help.ReveingUser')
				),				
			Boolean::make(__('Confirmed'), 'confirmed')
                ->canSee(function ($request) {
                    return $request->user()->role == 'admin';
                }),				
			Number::make(__('Minutes'), 'minutes')
				->min(30)
				->max(1000)
				->rules('required')
				->step(30)
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
			Button::make(__('ConfirmTransaction'), 'confirmTransaction')
				->event('App\Events\TransactionButtonClick')
				->style('primary')->confirm('Are you sure?')
				->visible($this->confirmed == false)
				->reload(),
			Trix::make(__('Content'), 'notes')
				->help(
					__('hel.Content')
				),							
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
