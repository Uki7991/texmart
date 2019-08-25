<?php

namespace App\Observers;

use App\Production;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic;

class ProductionObserver
{
    /**
     * Handle the production "creating" event.
     *
     * @param  \App\Production  $production
     * @return void
     */
    public function creating(Production $production)
    {
        $production->user_id = auth()->user()->id;

        $production->coordinates = null;
        if (($longtitude = request('latitude')) && ($latitude = request('longtitude'))) {
            $lat = (float) $latitude;
            $lng = (float) $longtitude;
            $production->coordinates = DB::raw("ST_GeomFromText('POINT({$lng} {$lat})')");
        }

        if (request('phone1') && request('code')) {
            $production->phone1 = request('code'). ' ' . request('phone1');
        }
        if (request('phone2') && request('code2')) {
            $production->phone2 = request('code2'). ' ' . request('phone2');
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
        $production->images = json_encode($imagesArray, true);

        if ($logo = request('logo')) {
            $fileName = 'productions/'.uniqid('production_logo_').'.jpg';
            $image = ImageManagerStatic::make($logo)
                ->resize(600, null, function ($constraint) {
                    return $constraint->aspectRatio();
                })
                ->stream('jpg', 40);

            Storage::disk('local')->put('public/'.$fileName, $image);
            $production->logo = $fileName;
        }
    }

    /**
     * Handle the production "created" event.
     *
     * @param  \App\Production  $production
     * @return void
     */
    public function created(Production $production)
    {
        if ($categories = request('categories')) {
            $production->categories()->sync($categories);
        }
    }

    /**
     * Handle the production "updated" event.
     *
     * @param  \App\Production  $production
     * @return void
     */
    public function updated(Production $production)
    {
        //
    }

    /**
     * Handle the production "deleted" event.
     *
     * @param  \App\Production  $production
     * @return void
     */
    public function deleted(Production $production)
    {
        //
    }

    /**
     * Handle the production "restored" event.
     *
     * @param  \App\Production  $production
     * @return void
     */
    public function restored(Production $production)
    {
        //
    }

    /**
     * Handle the production "force deleted" event.
     *
     * @param  \App\Production  $production
     * @return void
     */
    public function forceDeleted(Production $production)
    {
        //
    }
}
