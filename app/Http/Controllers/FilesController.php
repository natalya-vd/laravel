<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;

class FilesController extends Controller
{
    public function images($fileName)
    {
        $path = storage_path('app/public/images/' . $fileName);

        if (!Storage::disk('public')->exists('images/' . $fileName)) {
            return null;
        }

        $file = Storage::disk('public')->get('images/' . $fileName);
        $type = File::mimeType($path);

        $response = Response::make($file, 200);
        $response->header('Content-Type', $type);

        return $response;
    }
}
