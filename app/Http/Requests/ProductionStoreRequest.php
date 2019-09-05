<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductionStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'string|required',
            'address' => 'string|required',
            'excerpt' => 'string|required',
            'description' => 'string|required',
            'phone1' => 'required',
            'phone2' => '',
            'email' => '',
            'latitude' => '',
            'longtitude' => '',
            'images' => '',
            'type' => 'required',
            'logo' => 'required',
            'tools' => '',
            'amount_production' => '',
            'brand' => '',
        ];
    }
}
