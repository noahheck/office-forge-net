<?php

namespace App\Http\Requests\EditorImage;

use Illuminate\Foundation\Http\FormRequest;

class Upload extends FormRequest
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
            'file'          => 'required|image',
            'resource_type' => 'required',
        ];
    }
}
