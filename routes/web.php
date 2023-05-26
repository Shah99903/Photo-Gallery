<?php

use App\Http\Controllers\GalleryController;
use App\Http\Controllers\AllimagesController;
use App\Http\Controllers\UploadController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery');
Route::get('/allimages', [AllimagesController::class, 'index'])->name('allimages');
Route::get('/upload', [UploadController::class, 'index'])->name('upload');
Route::get('delete/{id}', [AllimagesController::class, 'delete'])->name('allimages-delete');

Route::post('upload-create', [UploadController::class, 'create'])->name('upload.create');
