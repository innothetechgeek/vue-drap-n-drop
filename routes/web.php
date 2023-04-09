<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SectionsController;
use Inertia\Inertia;
use App\Http\Controllers\PageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::post('sections/uploadsliderimage',[SectionsController::class,'uploadSliderImages'])->name('upload-slider-images');
Route::get('sections/slides/{section_id}',[SectionsController::class,'getSectionSlides'])->name('section.slides');
Route::post('sections/addcourse/{section_id}',[SectionsController::class,'addCourse'])->name('section.addcourse');
Route::get('section/courses/{section_id}',[SectionsController::class,'getCourses'])->name('section.getcourses');
Route::get('section/dete/{section_id}',[SectionsController::class,'deleteSection'])->name('section.delete');

Route::get('pages',[PageController::class,'getPages']);
Route::post('pages/addsection/{pageid}',[PageController::class,'addSection'])->name('page.addsection');
Route::get('page/sections/{pageid}',[PageController::class,'getSections']);


require __DIR__.'/auth.php';
