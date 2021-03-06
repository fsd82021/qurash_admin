<?php

namespace App\Http\Resources\Resource;

use Illuminate\Http\Resources\Json\JsonResource;

class TeamReosource extends JsonResource
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
            'image' => asset($this->image),
            'name' => $this->translate($request->lang)->name,
            'description' => $this->translate($request->lang)->description,
            'img_alt' => $this->translate($request->lang)->img_alt,
        ];
    }
}
