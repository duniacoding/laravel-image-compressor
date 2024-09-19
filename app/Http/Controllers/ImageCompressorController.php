<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageCompressorController extends Controller
{
    public function compressImage(Request $request)
    {
        $request->validate([
            'image_format' => 'required|string',
            'image' => 'required|image',
        ]);
    }
}
