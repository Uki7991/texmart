<?php

namespace App;

use App\Observers\ProductionObserver;
use ChristianKuri\LaravelFavorite\Traits\Favoriteable;
use Dorvidas\Ratings\Models\RateableTrait;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Session;
use TCG\Voyager\Traits\Spatial;


class Production extends Model
{
    use Sluggable;
    use Favoriteable;
    use RateableTrait;
    use Spatial;

    protected $fillable = ['title', 'address', 'excerpt', 'description', 'phone1',
        'phone2', 'email', 'site', 'type', 'tools', 'amount_production', 'brand',];

    protected $spatial = ['coordinates'];
    protected $casts = ['images'];

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
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

    public static function getProductionViews($id)
    {
        if (Session::has('productionsViewed')) {
            if (in_array($id, Session::get('productionsViewed'))) {
                return true;
            } else {
                $productions = Arr::prepend(Session::get('productionsViewed'), $id);
                Session::put('productionsViewed', $productions);
                return false;
            }
        }
        Session::put('productionsViewed', [$id]);

        return false;
    }
}
