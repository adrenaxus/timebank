<?php

namespace App\Nova;

use Laravel\Nova\Fields\ID;
use Illuminate\Http\Request;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\BelongsTo;
use App\Tag as TagModel;
use Mdixon18\Fontawesome\Fontawesome;
use R64\NovaFields\JSON;

class Tag extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
	public static $model = TagModel::class;
	

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'title_de';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'title_de',
    ];
	
	/**
	 * Get the displayable label of the resource.
	 *
	 * @return string
	 */
	public static function label()
	{
		return __('Tags');
	}

	/**
	 * Get the displayable singular label of the resource.
	 *
	 * @return string
	 */
	public static function singularLabel()
	{
		return __('Tag');
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
			//BelongsTo::make('Kategorie', 'category', 'App\Nova\Category'),
			Text::make('DEU*', 'title_de'),
			Text::make('ITA*', 'title_it'),
			Text::make('LAD*', 'title_ld'),
			Fontawesome::make(__('Icon'), 'icon')->addButtonText('Symbol'),
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
