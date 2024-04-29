<?php

use Illuminate\Support\Facades\File;

 function uploadFile($fileData, $dirPath = null, $existFile = null){

    $fileNameWithPath = null;
    if ($fileData) {
        $file = $fileData;

        //delete old file
        if (File::exists($existFile)) {
            File::delete($existFile);
        }

        //directory/folder manage
        $path = 'upload';
        if ($dirPath) {
            $path = 'upload/' . $dirPath;
        }
        if (!File::exists($path)) {
            File::makeDirectory($path, 0777, true); //create directory
        }

        //create image name
        $fileName = generateRandomString() . '-' . time() . '.' . $file->getClientOriginalExtension();
        $fileNameWithPath = $path . '/' . $fileName;
        $fileData->move(public_path($path), $fileName);
    }
    return $fileNameWithPath;
}

function generateRandomString($length = 10)
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
