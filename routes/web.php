<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\MessagesController;

Route::view('/','home')->name('home');
Route::view('/about','about')->name('about');

Route::resource('portafolio',ProjectController::class)->names('projects')->parameters(['portafolio'=>'project']);

// Route::get('/portafolio', [ProjectController::class,'index'])->name('projects.index');  
// Route::post('/portafolio', [ProjectController::class,'store'])->name('projects.store');  
// Route::get('/portafolio/crear', [ProjectController::class,'create'])->name('projects.create');
// Route::get('/portafolio/{project}/editar', [ProjectController::class,'edit'])->name('projects.edit');
// Route::patch('/portafolio/{project}', [ProjectController::class,'update'])->name('projects.update');
// Route::get('/portafolio/{project}', [ProjectController::class,'show'])->name('projects.show');
// Route::delete('/portafolio/{project}', [ProjectController::class,'destroy'])->name('projects.destroy');

Route::post('/contacto/delete', [MessagesController::class, 'store'])->name('contactos.store');
Route::view('/contacto','contacto')->name('contacto');
Auth::routes();

