<?php

namespace App\Http\Requests\Subscriber;

use Illuminate\Foundation\Http\FormRequest;

class SubscribeRequest extends FormRequest
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
            // Structure of unique validation fields: https://stackoverflow.com/a/45139017/2422852
            'subscriber_email' => 'required|email|unique:subscribers,email,NULL,id,deleted_at,NULL',
            'confirm_subscription' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'subscriber_email.unique' => 'That email address has already subscribed to updates.'
        ];
    }
}
