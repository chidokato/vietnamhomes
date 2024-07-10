<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;

use Illuminate\Support\Facades\Log;

class UploadController extends Controller
{
    public function upload(Request $request)
    {
        Log::info('Upload request received.');

        if ($request->hasFile('upload')) {
            $file = $request->file('upload');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            // $filename = $file->getClientOriginalName();
            // while(file_exists("/uploads".$filename)){$filename = rand(0,99)."_".$filename;}
            $destinationPath = public_path('/uploads');
            $file->move($destinationPath, $filename);

            $url = url('/uploads/' . $filename);

            Log::info('File uploaded successfully.', ['url' => $url]);

            return response()->json([
                'uploaded' => true,
                'url' => $url
            ]);
        }

        Log::error('File upload failed.');
        return response()->json([
            'uploaded' => false,
            'error' => [
                'message' => 'File upload failed.'
            ]
        ]);
    }
}
