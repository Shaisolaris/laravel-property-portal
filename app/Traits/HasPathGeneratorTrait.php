<?php

namespace App\Traits;

use Illuminate\Support\Str;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

trait HasPathGeneratorTrait
{
    public function getPath(Media $media): string
    {
        $folder = $this->pathGenerate ?? Str::snake(class_basename($this));

        return "$folder/$media->id/";
    }


    public function getPathForConversions(Media $media): string
    {
        return $this->getPathForConversions($media);
    }


    public function getPathForResponsiveImages(Media $media): string
    {
        return $this->getPathForResponsiveImages($media);
    }
}
