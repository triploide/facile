<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Product extends Model
{
	use Sluggable;

    protected $fillable = ['name', 'cost', 'profit_margin', 'category_id'];

    public function category()
    {
    	return $this->belongsTo(Category::class);
    }

    public function properties()
    {
    	return $this->belongsToMany(Property::class);
    }

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
}
