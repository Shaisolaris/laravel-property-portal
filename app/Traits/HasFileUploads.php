<?php

namespace App\Traits;

use App\Facades\Logging;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Collection;
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
            $this->addMedia($file)
                ->setFileName($file->hashName())
                ->withCustomProperties($customProperties)
                ->toMediaCollection($collection, app()->isProduction() ? 's3' : 'public');
        } catch (\Exception $e) {
            Logging::createDefaultLog("HasFileUploads(singleFileUpload) - " . $e->getMessage());

            return null;
        }
    }


    public function getFilesCollection(int $skip, int $limit, string $collection = 'files'): AnonymousResourceCollection
    {
        return MediaResource::collection($this->getMedia($collection)->slice($skip, $limit));
    }


    public function saveMediaFromUrls(array|string $urls, string $collection = 'files', array $customProperties = []): void
    {
        try {
            if (gettype($urls) == 'array') {
                collect($urls)->each(fn (string $url) => $this->addMediaFromUrl($url)
                    ->sanitizingFileName(fn (string $filename) => strtolower(str_replace(['#', '/', '\\', ' '], '-', $filename)))
                    ->withCustomProperties($customProperties)
                    ->toMediaCollection($collection, app()->isProduction() ? 's3' : 'public'));
            } else {
                $this->addMediaFromUrl($urls)
                    ->sanitizingFileName(fn (string $filename) => strtolower(str_replace(['#', '/', '\\', ' '], '-', $filename)))
                    ->withCustomProperties($customProperties)
                    ->toMediaCollection($collection, app()->isProduction() ? 's3' : 'public');
            }
        } catch (FileCannotBeAdded $e) {
            Logging::createDefaultLog("HasFileUploads (saveMediaFromUrls) - " . $e->getMessage());
        }
    }
}
