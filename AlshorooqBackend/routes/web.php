<?php

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

Route::get('/', function () {
    $pageName = 'home';
    return view('home',compact('pageName'));
})->name('home');
Route::get('/about', function () {
    $pageName = 'about';
    return view('about',compact('pageName'));
})->name('about');
Route::get('/contact', function () {
    $pageName = 'contact';
    return view('contact',compact('pageName'));
})->name('contact');
