<?php

use App\Http\Controllers\FalkutasController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/falkutas', FalkutasController::class);
// Route::get('/list-falkutas', function () {
//     return view('falkutas.list-falkutas');
// });
// Route::get('/add-falkutas', function () {
//     return view('falkutas.add-falkutas');
// });
// Route::get('/edit-falkutas', function () {
//     return view('falkutas.edit-falkutas');
// });