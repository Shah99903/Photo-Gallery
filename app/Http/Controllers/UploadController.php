<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function index()
    {
        return view('Upload');
    }
    public function create(Request $request)
    {

        $imageName = time() . '.' . $request->fileToUpload->extension();
        $request->fileToUpload->move(public_path('images'), $imageName);
        $images = new Image();
        $images->name = $request->image_name;
        $images->image_path = $imageName;
        $images->save();
        return redirect(route('allimages'));
    }
}
