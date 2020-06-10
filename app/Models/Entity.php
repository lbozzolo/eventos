<?php

namespace Eventos\Models;

use Carbon\Carbon;
use Eloquent as Model;
use Eventos\Models\Image as Image;

class Entity extends Model
{

    public function getFechaCreadoAttribute()
    {
        return Carbon::parse($this->attributes['created_at'])->format('d-m-Y');
    }

    public function getFechaEditadoAttribute()
    {
        return Carbon::parse($this->attributes['updated_at'])->format('d-m-Y');
    }

    public function getHoraCreadoAttribute()
    {
        return Carbon::parse($this->attributes['created_at'])->format('h:i A');
    }

    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }

    public function mainImage()
    {
        $response = asset('images/noimage.png');

        if($this->images->count()) {
            $path = ($this->images()->where('main', 1)->first()) ? $this->images()->where('main', 1)->first()->path : $this->images->first()->path;
            $response = asset('imagenes/'.$path);

            $response = (file_exists(public_path('imagenes/'.$path)))? $response : asset('images/noimage.png');

        }

        return $response;
    }

    public function mainImageThumb()
    {
        $response = asset('images/noimage.png');

        if($this->images->count()) {
            $path = ($this->imagesThumb()->where('main', 1)->first()) ? $this->imagesThumb()->where('main', 1)->first()->path : $this->imagesThumb->first()->path;
            $response = asset('imagenes/'.$path);

            $response = (file_exists(public_path('imagenes/'.$path)))? $response : asset('images/noimage.png');
        }

        return $response;
    }

    public function imagesThumb()
    {
        return $this->morphMany(Image::class, 'imageable')->where('thumbnail_id', null);
    }

    public function imagesBig()
    {
        return $this->morphMany(Image::class, 'imageable')->where('thumbnail_id', '!=', null);
    }

}
