<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactForm extends FormRequest
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
          'email' => 'required|email|max:100',
          'phone' => 'nullable|max:17',
          'message' => 'required|max:255',
          'captcha' => 'required|numeric',
          'vehicle' => 'nullable|max:100'
        ];
    }
}
