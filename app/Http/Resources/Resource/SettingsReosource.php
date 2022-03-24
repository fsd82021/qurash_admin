<?php

namespace App\Http\Resources\Resource;

use Illuminate\Http\Resources\Json\JsonResource;

class SettingsReosource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'logo' => asset($this->logo),
            'facebook' =>  $this->facebook,
            'twitter' =>  $this->twitter,
            'instagram' =>  $this->instagram,
            'email' =>  $this->email,
            'phone' =>  $this->phone,
            'website_title' => $this->translate($request->lang)->website_title,
            'meta_title' => $this->translate($request->lang)->meta_title,
            'meta_description' => $this->translate($request->lang)->meta_description,
            'footer_description' => $this->translate($request->lang)->footer_description,
            'meta_keywords' => $this->translate($request->lang)->meta_keywords,
            'address' => $this->translate($request->lang)->address,
        ];
    }
}
