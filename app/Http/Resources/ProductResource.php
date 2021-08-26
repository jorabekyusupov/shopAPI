<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
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
            'id' => $this->id,
            'title' => $this->title,
            'about' => $this->about,
            'discription' => $this->discription,
            'category_id' => $this->category->name,
            'price' => $this->price,
            'instock' => $this->instock,
            'image' => $this->image,
            'images' => $this->images
        ];
    }
}
