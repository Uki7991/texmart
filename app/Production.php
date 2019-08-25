<?php

namespace App;

use ChristianKuri\LaravelFavorite\Traits\Favoriteable;
use Dorvidas\Ratings\Models\RateableTrait;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use TCG\Voyager\Traits\Spatial;


class Production extends Model
{
    use Sluggable;
    use Favoriteable;
    use RateableTrait;
    use Spatial;

    protected $fillable = ['title', 'address', 'excerpt', 'description', 'phone1', 'phone2', 'email', 'site', 'type', 'tools', 'amount_production', 'brand',];

    protected $spatial = ['coordinates'];
    protected $casts = ['images'];

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
