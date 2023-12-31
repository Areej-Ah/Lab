<?php

namespace App\Http\Controllers;
use App\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UploadController extends Controller
{
    public  function upload ($data = [])
    {
        if(in_array('new_name',$data))
        {
          $new_name = $data['new_name'] === null ? time() : $new_name;
        }

        if ( (request()->hasFile($data['file'])) && ($data['upload_type'] == 'single'))
        {
          !is_null($data['delete_file']) && Storage::has($data['delete_file'] )?Storage::delete($data['delete_file']):'';
          return request()->file($data['file'])->store($data['path']);
        }

    }
}
