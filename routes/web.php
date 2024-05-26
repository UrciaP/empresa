<?php

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
    return view('home');
});

Route::get('servicios/{opcional?}', function ($opcional = null) {
    return view('servicios', ['opcional' => $opcional]);
})->where('opcional', '[A-Za-z]+');

Route::get('proyectos/{opcional?}', function ($opcional = null) {
    return view('proyectos', ['opcional' => $opcional]);
})->where('opcional', '[A-Za-z]+');

Route::get('clientes/{opcional?}', function ($opcional = null) {
    return view('clientes', ['opcional' => $opcional]);
})->where('opcional', '[A-Za-z]+');

Route::get('blog/{opcional?}', function ($opcional = null) {
    return view('blog', ['opcional' => $opcional]);
})->where('opcional', '[0-9]+');

Route::get('contacto', function () {
    return view('contacto');
});


// Route::get('catalog/create', function () {
//     return view('catalog.create');
// });   ->name('contacto')



// Route::get('/', function () {
//     return view('home');
// });


// Route::get('login', function () {
//     return view('auth.login');
// });

// Route::post('logout', function () {
//     return 'Logout usuario';
// });

// Route::get('catalog', function () {
//     return view('catalog.index');
// });

// Route::get('catalog/show/{id}', function ($id) {
//     return view('catalog.show', ['id' => $id]);
// });


// Route::get('catalog/create', function () {
//     return view('catalog.create');
// });

// Route::get('catalog/edit/{id}', function ($id) {
//     return view('catalog.edit', ['id' => $id]);
// });