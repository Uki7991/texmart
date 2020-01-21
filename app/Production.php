<?php

namespace App;

use App\Observers\ProductionObserver;
use ChristianKuri\LaravelFavorite\Traits\Favoriteable;
use Dorvidas\Ratings\Models\RateableTrait;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic;
use TCG\Voyager\Traits\Spatial;


class Production extends Model
{
    use Sluggable;
    use Favoriteable;
    use RateableTrait;
    use Spatial;

    protected $fillable = [
        'title', 'address', 'excerpt', 'description', 'phone1',
        'phone2', 'email', 'site', 'type', 'tools', 'amount_production', 'brand',
        'expert', 'minimum_order', 'from_amount_production', 'before_amount_prod',
<<<<<<< Updated upstream
        'price', 'user_id', 'slug', 'logo', 'views', 'id',
=======
        'price', 'user_id', 'slug', 'logo', 'views', 'id', 'currency',
        'priceUSD', 'priceRUB', 'priceKGS'
>>>>>>> Stashed changes
    ];

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

    public function feedbacks()
    {
        return $this->hasMany(Feedback::class);
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

    public function updateColumns()
    {
        $this->coordinates = null;
        if (($longtitude = request('latitude')) && ($latitude = request('longtitude'))) {
            $lat = (float) $latitude;
            $lng = (float) $longtitude;
            $this->coordinates = DB::raw("ST_GeomFromText('POINT({$lng} {$lat})')");
        }

        if (request('phone1') && request('code')) {
            $this->phone1 = request('code'). ' ' . request('phone1');
        }
        if (request('phone2') && request('code2')) {
            $this->phone2 = request('code2'). ' ' . request('phone2');
        }

        $imagesArray = [];
        if ($images = request('images')) {
            foreach ($images as $image) {
                $fileName = 'productions/'.uniqid('production_').'.jpg';
                $image = ImageManagerStatic::make($image)
                    ->resize(1000, null, function ($constraint) {
                        return $constraint->aspectRatio();
                    })
                    ->stream('jpg', 40);

                Storage::disk('local')->put('public/'.$fileName, $image);
                $imagesArray[] = $fileName;
            }
        }
        $this->images = json_encode($imagesArray, true);

        if ($logo = request('logo')) {
            $fileName = 'productions/'.uniqid('production_logo_').'.jpg';
            $image = ImageManagerStatic::make($logo)
                ->resize(600, null, function ($constraint) {
                    return $constraint->aspectRatio();
                })
                ->stream('jpg', 40);

            Storage::disk('local')->put('public/'.$fileName, $image);
            $this->logo = $fileName;
        }
        if ($categories = request('categories')) {
            $this->categories()->sync($categories);
        }
        $this->save();
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
