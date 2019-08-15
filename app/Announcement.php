<?php

namespace App;

use ChristianKuri\LaravelFavorite\Traits\Favoriteable;
use Cviebrock\EloquentSluggable\Sluggable;
use Dorvidas\Ratings\Models\RateableTrait;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Spatial;

class Announcement extends Model
{
    use Sluggable;
    use Favoriteable;
    use RateableTrait;
    use Spatial;

    protected $spatial = ['coordinates'];

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
