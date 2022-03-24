<?php

namespace App\Http\Requests\Site;

use Illuminate\Foundation\Http\FormRequest;

class ContactFormRequest extends FormRequest
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
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ];
    }
    public function messages()
    {
        return  [
            'name.required' => trans('site.name_required'),
            'email.required' => trans('site.email_required'),
            'email.email' => trans('site.email_email'),
            'subject.required' => trans('site.subject_required'),
            'message.required' => trans('site.message_required'),
        ];
    }
}
