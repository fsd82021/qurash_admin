<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ServImageRequest extends FormRequest
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
        $rules = [
            'images.*' => ($this->getMethod() == 'POST')
            ? 'required|image'
            : '',
        ];
        return $rules;
    }
    public function messages()
    {
        $messages = [
            'images.required' => trans('requests.image_required')
        ];
        return $messages;
    }
}
