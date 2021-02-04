<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustUrl extends FormRequest
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
            'customUrl' => 'required|min:1|max:50|url'
        ];
    }

    public function attributes()
    {
        return [
            'customUrl' => 'your URL'
        ];
    }

    public function messages()
    {

        return [
            'customUrl.required' => 'Enter your URL',
            'customUrl.min:1' => 'To short URL',
            'customUrl.max:50' => 'To long URL',
            'customUrl.url' => 'Not correct Url'
        ];
    }
}
