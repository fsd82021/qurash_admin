<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OptionRequest extends FormRequest
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
        $rules = [];
        foreach (config('translatable.locales') as $locale) {
            $rules += [$locale . '.value' => ['required']];
        }
        return $rules;
    }
    public function messages()
    {
        $messages = [];
        foreach (config('translatable.locales') as $locale) {
            $messages += [$locale . '.value.required' => trans('requests.value_required_' . $locale)];
        }
        return $messages;
    }
}
