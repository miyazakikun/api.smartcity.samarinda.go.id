<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class EventResource extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
                'id' => $this->id,
                'judul' => $this->judul,
                'intro' => $this->intro,
                'isi_event' => $this->isi_event,
                'image_event' => $this->image_event,
                'caption_image' => $this->caption_image,
        ];
    }
}
