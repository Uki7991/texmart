<?php

namespace App\Http\Controllers;

use App\Address;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;
use Midnite81\GeoLocation\Services\GeoLocation;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct(GeoLocation $geoLocation)
    {
        $address = request()->server('REMOTE_ADDR');

        $ipLocation = $geoLocation->getCity($address);

        $addressFinded = DB::table('addresses')->where('address', $address)->get();

        if (!$addressFinded->isEmpty()) {
            $this->userAddress($addressFinded);
        } else {
            $addressNew = new Address();
            $addressNew->address = $address;
            $addressNew->country = $ipLocation->getCountryName();
            $addressNew->city = $ipLocation->getCityName();
            $addressNew->save();
            $this->userAddress($addressNew);
        }
    }

    public function userAddress($address)
    {
        if (auth()->check()) {
            $this->user_id = auth()->id();
            $this->save();
            return $this;
        }

        return $this;
    }
}
