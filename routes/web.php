<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controL;
use App\Http\Controllers\InicioJController;

// Route::get('/', [controL::class, 'index'])->name('controlL.index');
Route::get('/', function () {
    return redirect()->route('dashboard');
});
Route::post('/controlL', [controL::class, 'store'])->name('controlL.store');

Route::get('/inicioL', [controL::class, 'index']);

Route::get('/inicioJ', [InicioJController::class, 'index'])->name('inicioJ.index');
Route::post('/inicioJ', [InicioJController::class, 'store'])->name('inicioJ.store');

Route::get('/inicioB', function () {
    return view('inicioB');
})->name('inicioB');

/*
Route::get('/', function () {
    return view('inicioL');
    return view('inicioN');
    return view('welcome');
});*/
/*
Route::get('/inicioL', function () {
    return view('inicioL');
});*/


Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/ordenes/create', function () {
    return view('ordenes.create');
})->name('ordenes.create');

Route::post('/ordenes', function () {
    // Lógica para guardar la orden
})->name('ordenes.store');
