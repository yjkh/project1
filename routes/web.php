<?php

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

Route::get('/welcome','ProjectControllers@welcome');
Route::get('/signupask','ProjectControllers@signupask');
Route::get('/signupfors','ProjectControllers@signupfors');
Route::get('/signupast','ProjectControllers@signupast');
Route::get('/login','ProjectControllers@login');
Route::get('/subjects','ProjectControllers@subjects');
Route::get('/forstudents','ProjectControllers@forstudents');
Route::get('/fortutors','ProjectControllers@fortutors');