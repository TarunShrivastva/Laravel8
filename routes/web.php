<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Http\Request;

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


Route::get('home', [HomeController::class, 'index']);

Route::get('test', function() {
    return 'testig';
});

Route::match(['get', 'post'], '/match', function () {
    return 'you are in match route';
});

Route::any('/any', function () {
    return 'you are in any request';
});

Route::get('/users', function (Request $request) {
    return $request;
});


// Route::redirect('/here', '/there');  

Route::redirect('/here', '/there', 301);

Route::redirect('there', 'there2');

Route::get('there2', function () {
    return 'there2';
});


Route::view('/welcome', 'home.index', ['name' => 'Taylor 1']);


Route::get('/user/{id}', function ($id) {
    return 'User '.$id;
});

Route::get('/user/{id}/{id2?}', function ($id, $id2=null) {
    return 'User '.$id . ', ' . $id2;
});

// Route::get('/user/{id}/{id2?}', function ($id, $id2= null) {
//     return 'User '.$id . ', ' . $id2;
// });

Route::resource('posts', PostController::class);
