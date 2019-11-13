<?php

namespace App\Http\Controllers;

use App\Address;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Midnite81\GeoLocation\Services\GeoLocation;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function address(GeoLocation $geoLocation)
    {
        $address = request()->server('REMOTE_ADDR');

        $ipLocation = null;

        try {
            $ipLocation = $geoLocation->getCity($address);
        } catch (\Exception $exception) {
            Log::alert($exception->getMessage());
        }

        $addressFinded = Address::where('address', $address)->get();

        if (!$addressFinded->isEmpty()) {
            $this->userAddress($addressFinded->first());
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
            $address->user_id = auth()->id();
            $address->save();
            return $address;
        }

        return $address;
    }
}
