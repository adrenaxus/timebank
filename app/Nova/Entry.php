<?php

namespace App\Nova;

use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\DateTime;
use Laravel\Nova\Fields\Trix; 
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\Date;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\Select;
use Illuminate\Http\Request;
use Laravel\Nova\Http\Requests\NovaRequest;
use Spatie\TagsField\Tags;

class Entry extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = 'App\Entry';
	
	
	/**
	 * The relationships that should be eager loaded on index queries.
	 *
	 * @var array
	 */
	public static $with = ['tags'];
	
	

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'title';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
		'title',
    ];
	
	/**
	 * Get the displayable label of the resource.
	 *
	 * @return string
	 */
	public static function label()
	{
		return __('Entries');
	}

	/**
	 * Get the displayable singular label of the resource.
	 *
	 * @return string
	 */
	public static function singularLabel()
	{
		return __('Entry');
	}
    
    
    public static function indexQuery(NovaRequest $request, $query)
    {
    }    

	
	//relations shown in dropdown menu
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
			Select::make(__('Type') . "*", 'type')->options([
					'offer' => 'Angebot',
					'request' => 'Anfrage',
				])
				->displayUsingLabels()
				->rules('required')
				->sortable()
				->help(
					__('help.Type')
				),
			
			Text::make(__('Title') . "*", 'title')
				->rules('required', 'max:80')
				->sortable()
				->help(
					__('help.Title')
				),			
			Tags::make(__('Tags') . "*", 'Tags')
				->limitSuggestions(50)
				->rules('required')
				->help(
					__('help.Tags')
				),				
			Trix::make(__('Content'), 'content')
				->sortable()
				->help(
					__('help.Content')
				),				
			Image::make(__('Image'),'featured_image'),
			Date::make(__('ExpiresAt'), 'expires_at')
				->firstDayOfWeek(1)
				->format('DD.MM.YYYY')
				->sortable()
				->help(
					__('help.ExpiresAt')
				),				
			Boolean::make(__('Visible'), function () {
                if(!$this->expires_at)
                    return true;
				return !now()->gt($this->expires_at);
			}),
			BelongsTo::make('user', 'user')
				->hideWhenCreating()
				->hideWhenUpdating()
				->sortable()
				->canSee(function ($request) {
					return true;
				})
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
		return [
			new Filters\EntryType,
		];
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
