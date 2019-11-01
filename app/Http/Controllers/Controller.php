<?php

namespace App\Http\Controllers;

use App\Address;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct()
    {
        $address = request()->server('REMOTE_ADDR');

        $addressFinded = DB::table('addresses')->where('address', $address)->get();

        if (!$addressFinded->isEmpty()) {
            $this->userAddress($addressFinded);
        } else {
            $addressNew = new Address();
            $addressNew->address = $address;
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
