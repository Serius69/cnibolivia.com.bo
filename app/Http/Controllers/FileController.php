<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
    function getFile($filename){
        $file=Storage::disk('public')->get($filename);
  
        return (new Response($file, 200))
              ->header('Content-Type', 'image/jpeg');
    }
}
