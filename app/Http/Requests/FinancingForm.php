<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FinancingForm extends FormRequest
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
          'firstname' => 'required|max:25',
          'lastname' => 'required|max:25',
          'email' => 'required|email',
          'phone' => 'required|max:17',
          'address' => 'required|max:100',
          'city' => 'required|max:50',
          'postalcode' => 'required|max:10',
          'resduration' => 'required|max:50',
          'birthday' => 'required|max:50',
          'sin' => 'nullable|max:20',
          'employer' => 'required|max:100',
          'occupation' => 'required|max:100',
          'income' => 'required|max:12',
          'employerphone' => 'required|max:17',
          'employeraddress' => 'required|max:100',
          'empduration' => 'required|max:50',
          'captcha' => 'required|numeric'
        ];
    }
}
