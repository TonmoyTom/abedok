<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AdmissionStatusResource extends JsonResource
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
            'id'            =>$this->id,
            'short_name'    =>$this->short_name,
            'description'   =>$this->description,
            'file'          =>setImage($this->file),
            'lat'           =>$this->lat,
            'long'          =>$this->long,
            'type'          =>(int)$this->type,
            'active'        =>(int)$this->status 
        ];
    }
}
