<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CountryController;

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

})->name('welcometest');
Route::get('/yah', function () {
    return "hellooooo routs";

})->name('test');
Route::get('/welcome2', function () {
    return view('welcome2');

});
Route::get('/user/{id}', function ($id) {
    return 'this is user number '.$id;
})->where('id','[1:9]+')->name('user_test');


Route::get('/managers', function () {
    return view('managers');
});
Route::get('/supervisors', function () {
    return view('supervisors');
});
Route::get('/child', function () {
    return view('child');
});

Route::get('/hello',[UserController::class,'index'])->name('helloroute');

Route::resource('/countries', CountryController::class);
