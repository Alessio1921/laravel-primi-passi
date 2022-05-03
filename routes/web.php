<?php

use Illuminate\Support\Facades\Route;
use Symfony\Component\VarDumper\Cloner\Data;

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

// dd($data);
Route::get('/', function () {
  $data = ["title" => "Hello World"];
  return view('home',$data);
})->name('home');
Route::get('/services', function () {
  return view('services');
})->name('services');
Route::get('/contacts', function () {
  return view('contacts');
})->name('contacts');