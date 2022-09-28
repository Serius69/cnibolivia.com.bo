<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    //
    public function store(Request $request)
    {

        $validatedData = $request->validate([
         'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        $name = $request->file('image')->getClientOriginalName();
        $path = $request->file('image')->store('\images\gallery');

        $save = new Photo;
        $save->name = $name;
        $save->path = $path;

        $save->save();

        echo $path = $request->file('image')->storeAs('images', $request->image->getClientOriginalName());

      return redirect('image-upload')->with('status', 'La imagen fue cargada con exito')->with('image',$name);

    }
}
