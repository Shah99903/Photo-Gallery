<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class AllimagesController extends Controller
{
    public function index()
    {
        $images = Image::get();

        return view('allimages', compact('images'));
    }
    public function delete($id)
    {
        // return $id;
        Image::where('id', $id)->delete();
        return redirect()->route('allimages');
    }
}
