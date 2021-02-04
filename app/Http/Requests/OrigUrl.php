<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrigUrl extends FormRequest
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
            'userUrl' => 'required|min:15|max:250|active_url'
        ];
    }

    public function attributes()
    {
        return [
            'userUrl' => 'your URL'
        ];
    }

    public function messages()
    {
        return [
            'userUrl.required' => 'Enter your URL',
            'userUrl.min:15' => 'To short URL',
            'userUrl.max:250' => 'To long URL',
            'userUrl.active_url' => 'Wrong URI (404). Enter your URL.',
        ];
    }
}
