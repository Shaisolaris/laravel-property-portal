<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Str;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

/** @mixin Media
 * @property mixed $name
 */
class MediaResource extends JsonResource
{
    public function toArray(Request $request): array
    {


        return [
            'uuid' => $this->uuid,
            'url' => $this->getFileUrl(),
//            'url' => app()->isLocal() ? $this->getUrl() : $this->getTemporaryUrl(now()->addMinutes(15)),
            'filename' => $this->getFileName(),

			'is_image' => Str::startsWith($this->mime_type, 'image/'),
			'is_pdf' => $this->mime_type = 'application/pdf',
//            'type' => $this->getMediaType($this->getModel()),
//            'extension' => $this->extension,
//            'humanReadableSize' => $this->humanReadableSize,
//            'conversion_url' => $this->getConversionUrl(),
//            'model_id' => $this->model_id,
//            'model_type' => $this->model_type,
//            'collection_name' => $this->collection_name,
//            'name' => $this->name,
//            'file_name' => $this->file_name,
//            'mime_type' => $this->mime_type,
//            'disk' => $this->disk,
//            'conversions_disk' => $this->conversions_disk,
//            'size' => $this->size,
//            'manipulations' => $this->manipulations,
//            'custom_properties' => $this->custom_properties,
//            'generated_conversions' => $this->generated_conversions,
//            'responsive_images' => $this->responsive_images,
//            'order_column' => $this->order_column,
//            'created_at' => $this->created_at,
//            'updated_at' => $this->updated_at,
        ];
    }


    public function getFileName(): ?string
    {
		$extension = pathinfo($this->file_name, PATHINFO_EXTENSION);

        return "{$this->name}.{$extension}";
    }

    public function getFileUrl(): ?string
    {
        if ($this->disk == 's3') {
            return $this->getTemporaryUrl(now()->addMinutes(15));
        }

        return $this->getUrl();
    }

    public function getConversionUrl(): ?string
    {
        if ($this->hasGeneratedConversion('placeholder')) {
			if ($this->conversions_disk == 's3') {
				return $this->getTemporaryUrl(now()->addMinutes(15), 'placeholder');
			}

			return  $this->getUrl('placeholder');
        }

        return null;
    }
}
