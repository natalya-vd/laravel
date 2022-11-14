<?php

namespace App\Services;

use Illuminate\Http\UploadedFile;
use Symfony\Component\HttpFoundation\File\Exception\UploadException;

class UploadFileService
{
    public function uploadImage(UploadedFile $uploadedFile): string
    {
        $path = $uploadedFile->storeAs('images/news', $uploadedFile->hashName(), 'public');

        if (!$path) {
            throw new UploadException('Файл не загружен');
        }

        return $path;
    }
}
