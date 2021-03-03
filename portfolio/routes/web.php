<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Models\post;


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
    return view('welcome');
});


Route::get('/port', function () {
    return view('port');
})->name('portfolio');


Route::get('/coffee', function () {
    return view('coffee');
})->name('coffee');


Route::get('/eco', function () {
    return view('lab2/eco');
})->name('ecology');

Route::get('post/add', function () {
    DB::table('post')->insert([
        'id' => '2',
        'title' => 'second',
        'body' => 'its second post'
    ]);
});
Route::get('post', function() {
    $post = post::find(2);
    return $post;
});