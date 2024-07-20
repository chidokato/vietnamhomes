<?php 
// app/Helpers/helpers.php
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Str;

if (!function_exists('saveImage')) {
    function saveImage($file, $path = 'data/product/', $width = 800, $height = 800) {
        $originalFilename = $file->getClientOriginalName();
        $filenameWithoutExtension = pathinfo($originalFilename, PATHINFO_FILENAME);
        $extension = $file->getClientOriginalExtension();
        $filename = $filenameWithoutExtension . '.' . $extension;

        while (file_exists(public_path($path . $filename))) {
            $filename = $filenameWithoutExtension . '_' . rand(0, 99) . '.' . $extension;
        }

        $img = Image::make($file)
            ->resize($width, $height, function ($constraint) {
                $constraint->aspectRatio();
            })
            ->save(public_path($path . $filename));

        return $filename;
    }
}

