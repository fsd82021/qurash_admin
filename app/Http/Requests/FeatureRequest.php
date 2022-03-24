<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FeatureRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function rules()
    {
        $rules = [
            'icon' => 'nullable',
        ];
        foreach (config('translatable.locales') as $locale) {
            $rules += [$locale . '.name' => ['required']];
            $rules += [$locale . '.description' => ['required']];

        }
        return $rules;
    }
    public function messages()
    {
        $messages = [
          
            'icon.required' => trans('feature.icon_required'),
       

        ];
        foreach (config('translatable.locales') as $locale) {
            $messages += [$locale . '.name.required' => trans('feature.name_required_' . $locale)];
            $messages += [$locale . '.description.required' => trans('feature.desc_required_' . $locale)];
             
        }
        return $messages;
    }
}
