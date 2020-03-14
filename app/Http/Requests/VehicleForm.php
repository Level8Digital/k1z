<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VehicleForm extends FormRequest
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
          'stock_num' => 'required|max:25',
          'vin' => 'required|max:25',
          'year' => 'required|max:4',
          'make' => 'required|max:50',
          'model' => 'required|max:50',
          'trim' => 'nullable|max:25',
          'kms' => 'numeric',
          'color' => 'required|max:50',
          'trans' => 'required|max:50',
          'price' => 'numeric',
          'desc' => 'nullable|max:1000',
          'images.*' => 'image|mimes:jpeg,png,jpg,svg|max:3550|nullable'
        ];
    }
}
