<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Tag extends \Spatie\Tags\Tag
{
	
    public static function getTagClassName(): string
    {
        return Tag::class;
    }
	
	
	public function tags(): MorphToMany
	{
		return $this
			->morphToMany(self::getTagClassName(), 'taggable', 'taggables', null, 'tag_id')
			->orderBy('order_column');
	}	
    
    
    /*
    public static function findFromString(string $name, string $type = null, string $locale = null)
    {
        $locale = $locale ?? app()->getLocale();

        return static::query()
            ->where(\DB::raw( "json_extract(name, '$." . $locale . "')" ), '=', $name)
            ->where('type', $type)
            ->first();
    } 
    */   
    
    
	
	
	/**
	 * The "booting" method of the model.
	 *
	 * @return void
	 */
	protected static function boot()
	{
		parent::boot();

		// auto-sets values on creation
		static::saving(function ($query) {
			$query->name = "asd";
			$query->setTranslation('name', 'de', $query->title_de);
			$query->setTranslation('name', 'ld', $query->title_ld);
			$query->setTranslation('name', 'it', $query->title_it);
		});
	}	
	
}