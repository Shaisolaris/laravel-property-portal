<?php

namespace App\Traits;

use Spatie\Image\Image;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Log;
use App\Http\Resources\MediaResource;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Spatie\MediaLibrary\MediaCollections\Exceptions\FileCannotBeAdded;

trait HasFileUploads
{
    use InteractsWithMedia;


    public function batchFilesUpload(mixed $data, string $collection = 'files', array $customProperties = []): Collection
    {
        $files = collect();

        foreach ($data as $file) {
            $files->push($this->singleFileUpload($file, $collection, $customProperties));
        }

        return $files;
    }


    public function singleFileUpload(UploadedFile $file, string $collection = 'files', array $customProperties = [])
    {
        try {
//            Image::load($file->getRealPath())->save();

            $this->addMedia($file)
                ->setFileName($file->hashName())
                ->withCustomProperties($customProperties)
                ->toMediaCollection($collection, app()->isLocal() ? 'public' : 's3');
        } catch (\Exception $e) {
            Log::debug("HasFileUploads(singleFileUpload) - " . $e->getMessage());

            return null;
        }
    }


    public function getFilesCollection(int $skip, int $limit, string $collection = 'files'): AnonymousResourceCollection
    {
        return MediaResource::collection($this->getMedia($collection)->slice($skip, $limit));
    }


    public function saveMediaFromUrls(array $urls, string $collection = 'files'): void
    {
        try {
            collect($urls)->each(fn (string $url) => $this->addMediaFromUrl($url)
                ->sanitizingFileName(fn (string $filename) => strtolower(str_replace(['#', '/', '\\', ' '], '-', $filename)))
                ->toMediaCollection($collection, app()->isLocal() ? 'public' : 's3'));
        } catch (FileCannotBeAdded $e) {
            Log::debug("HasFileUploads (saveMediaFromUrls) - " . $e->getMessage());
        }
    }
}
