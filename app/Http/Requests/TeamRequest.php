<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TeamRequest extends FormRequest
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
            'image' => ($this->getMethod() == 'POST')
                ? 'required|image'
                : '', 
        ];
        foreach (config('translatable.locales') as $locale) {
            $rules += [$locale . '.name' => ['required', 'string']];
            $rules += [$locale . '.description' => ['required']];
            $rules += [$locale . '.img_alt' => ['required']];
        }
        return  $rules;
    }
    public function messages()
    {
        $messages = [
            'image.required' => trans('requests.image_required'),
         ];
        foreach (config('translatable.locales') as $locale) {
            $messages += [$locale . '.name.required' => trans('requests.name_required_' . $locale)];
            $messages += [$locale . '.description.required' => trans('requests.description_required_' . $locale)];
            $messages += [$locale . '.img_alt.required' => trans('requests.img_alt_required_' . $locale)];

        }
        return $messages;
    }
}
