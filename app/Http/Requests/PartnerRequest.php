<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PartnerRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $rules = [
            'image' => ($this->getMethod() == 'POST')
            ? 'required|image'
            : '',
        ];
        foreach (config('translatable.locales') as $locale) {
            $rules += [$locale . '.img_alt' => ['required', 'string']];
        }
        return  $rules;
    }
    public function messages()
    {
        $messages = [
            'image.required' => trans('requests.image_required'),
        ];
        foreach (config('translatable.locales') as $locale) {
            $messages += [$locale . '.img_alt.required' => trans('requests.img_alt_required_' . $locale)]; 
        }
        return $messages;
    }
}
