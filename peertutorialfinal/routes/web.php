<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuitarController;
use App\Http\Controllers\KeyboardController;
use App\Http\Controllers\PercussionController;
use App\Http\Controllers\SiteController;

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
//Guitar
//view index
Route::get('/', [SiteController::class, 'home'])->name('home');

//guitar create
Route::get('/guitar', [GuitarController::class,'index'])->name('index');
Route::get('/guitar/create', [GuitarController::class,'create']);
Route::post('/guitar/create', [GuitarController::class,'store']);

//edit
Route::get('/guitar/edit/{guitar}', [GuitarController::class, 'edit'])->name('guitar.edit');
Route::post('/guitar/update/{guitar}', [GuitarController::class, 'update'])->name('guitar.update');

// Route::resource('guitars', GuitarController::class);
// Route::get('/guitars', [GuitarController::class,'guit'])->name('guitar');
// Route::post('/guitars/create', [GuitarController::class,'store']);

//delete guitar
Route::get('/guitar/index', [GuitarController::class, 'index'])->name('guitar.index');
Route::get('/guitar/delete/{id}', [GuitarController::class,'delete'])->name('guitarDelete');
Route::delete('/guitar/delete/{id}', [GuitarController::class, 'delete'])->name('guitar.delete');

//Percussion
Route::get('/', [SiteController::class, 'home'])->name('home');

//Perc create
Route::get('/percussion', [PercussionController::class,'index'])->name('index');
Route::get('/percussion/create', [PercussionController::class,'create']);
Route::post('/percussion/create', [PercussionController::class,'store']);

// Perc edit
Route::get('/percussion/edit/{percussion}', [PercussionController::class, 'edit'])->name('percussion.edit');
Route::post('/percussion/update/{percussion}', [PercussionController::class, 'update'])->name('percussion.update');

//Perc guitar
Route::get('/percussion/index', [PercussionController::class, 'index'])->name('percussion.index');
Route::get('/percussion/delete/{id}', [PercussionController::class,'delete'])->name('percussionDelete');
Route::delete('/percussion/delete/{id}', [PercussionController::class, 'delete'])->name('percussion.delete');

//Keyboard
Route::get('/keyboard', [KeyboardController::class,'index'])->name('index');
Route::get('/keyboard/create', [KeyboardController::class,'create']);
Route::post('/keyboard/create', [KeyboardController::class,'store']);

//edit
Route::get('/keyboard/edit/{keyboard}', [KeyboardController::class, 'edit'])->name('keyboard.edit');
Route::post('/keyboard/update/{keyboard}', [KeyboardController::class, 'update'])->name('keyboard.update');

// Route::resource('guitars', GuitarController::class);
// Route::get('/guitars', [GuitarController::class,'guit'])->name('guitar');
// Route::post('/guitars/create', [GuitarController::class,'store']);

//delete guitar
Route::get('/keyboard/index', [KeyboardController::class, 'index'])->name('keyboard.index');
Route::get('/keyboard/delete/{id}', [KeyboardController::class,'delete'])->name('keyboardDelete');
Route::delete('/keyboard/delete/{id}', [KeyboardController::class, 'delete'])->name('keyboard.delete');