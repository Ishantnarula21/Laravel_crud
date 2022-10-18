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
    return view('welcome');
});

//laravel crud

//display a page
Route::get('display_form', 'App\Http\Controllers\Icontroller@display_form');

//insert data
Route::post('form_insert', 'App\Http\Controllers\Icontroller@form_insert');

//delete data
Route::get('delete_data/{id}', 'App\Http\Controllers\Icontroller@delete_data');

//edit data display
Route::get('display_form/{id}', 'App\Http\Controllers\Icontroller@edit_data');
Route::get('display_paginate/{id}', 'App\Http\Controllers\Icontroller@edit_data');

//edit data edit
Route::post('edit_insert/{id}', 'App\Http\Controllers\Icontroller@edit_insert');

//edit data edit
Route::post('search_data', 'App\Http\Controllers\Icontroller@search_data');
