<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FaqRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function rules()
    {
        
        $rules = [];
        foreach (config('translatable.locales') as $locale) {
            $rules += [$locale . '.question' => ['required', 'string']];
            $rules += [$locale . '.answer' => ['required']];
        }
        return $rules;
    }
    public function messages()
    {
        $messages = [];
        foreach (config('translatable.locales') as $locale) {
            $messages += [$locale . '.question.required' => trans('faq.question_required_' . $locale)];
            $messages += [$locale . '.answer.required' => trans('faq.answer_required_' . $locale)];
        }
        return $messages;
    }
}
