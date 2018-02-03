<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
   protected $table = 'event';
   protected $fillable = [
                'id',
                'judul',
                'intro',
                'isi_event',
                'image_event',
                'caption_image',
    ];

     protected $hidden = [
        'id'
    ];
}
