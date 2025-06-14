<?php
namespace App\Traits;

use Illuminate\Http\UploadedFile;

trait fileUpload{
    public function uploadFile(UploadedFile $file, string $directory = 'uploads'):string
    {
       $fileName = 'educore_' . uniqid() . '.' . $file->getClientOriginalExtension();

       // move the file into storage/app/uploads
       $file->move(public_path($directory), $fileName);

       return '/' . $directory . '/' . $fileName;
    }
}