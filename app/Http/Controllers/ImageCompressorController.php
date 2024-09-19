<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic as Image;

class ImageCompressorController extends Controller
{
    public function compressImage(Request $request)
    {
        $request->validate([
            'image_format' => 'required|string',
            'image' => 'required|image',
        ]);

        $imageName = "compressed_images/" . Str::uuid() . "." . $request->image_format;
        $image = self::startCompress($request->image, $imageName);
        return back()->withSuccess("Image Compressed, <a download href='/$imageName'>Download Image</a>");
    }

    public static function startCompress($image, $image_name): \Intervention\Image\Image
    {
        return Image::make($image)->encode('webp', 60)->save($image_name);
    }
}
