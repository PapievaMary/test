<?php

use App\Models\Place;
use App\Models\Thing;
use Illuminate\Support\Facades\Route;

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
/*
Route::get('/', function () {
    return view('layout');
});
*/
Route::get('/', function () {
    return view('index');
});
Route::get('/about', function () {
    return view('main/about');
});

Route::get('/things', function(){
    return view('things.things', [
        'heading'=> 'Things list',
        'things'=> Thing::all()
        ]);
});

Route::get('/places', function(){
    return view('places.places', [
        'heading'=> 'Places list',
        'places'=> Place::all()
        ]);
});