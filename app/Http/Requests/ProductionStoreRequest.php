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
            'excerpt' => '',
            'description' => 'required',
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
            'expert' => '',
            'minimum_order' => '',
            'from_amount_production' => '',
            'before_amount_prod' => '',
            'categories' => 'required',
        ];
    }

    public function attributes()
    {
        return [
            'title' => 'название объявления',
            'address' => 'адрес',
            'description' => 'описание',
            'phone1' => 'номер телефона',
            'categories' => 'категории'
        ];
    }
}
