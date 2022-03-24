<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PagesRequest extends FormRequest
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
            'video' => ($this->getMethod() == 'POST')
            ? 'required|image'
            : '',
        ];
        foreach (config('translatable.locales') as $locale) {
            $rules += [$locale . '.title' => ['required', 'string']];
            $rules += [$locale . '.description' => ['required', 'string']];
        }
        return  $rules;
    }

    public function messages()
    {
        $messages = [
            'image.required' => trans('requests.image_required'),
            'video.required' => trans('requests.video_required'),

        ];
        foreach (config('translatable.locales') as $locale) {
            $messages += [$locale . '.title.required' => trans('requests.title_required_' . $locale)];
            $messages += [$locale . '.description.required' => trans('requests.description_required_' . $locale)];
            $messages += [$locale . '.img_alt.required' => trans('requests.img_alt_required_' . $locale)];
        }
        return $messages;
    }
}
