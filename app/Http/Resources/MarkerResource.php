<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MarkerResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            "id" => $this->id,
            "name" => $this->name,
            "address" => $this->address,
            "about_cafe" => $this->about_cafe,
            "about_barista" => $this->about_barista,
            "Playlist" => $this->Playlist,
            "latitude" => $this->latitude,
            "longitude" => $this->longitude,
        ];
    }

    public function with($request)
    {
        return [
            'status' => 'OK'
        ];
    }
}
