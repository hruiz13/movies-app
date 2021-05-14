<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMovie extends FormRequest
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
            'title' => 'required',
            'year' => 'required | min=1800'
        ];
    }

    public function attributes()
    {
        return [
            'title' => 'title of movie'
        ];
    }

    public function messages()
    {
        return [
            'year.required' => 'The year of movie is required'
        ];
    }
}
