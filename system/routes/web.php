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

Route::get('/login', function () {
    return view('login');
});

Route::get('/registrasi', function () {
    return view('registrasi');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('template', function(){
	return view('template.base');
});

Route::get('admin/beranda', function(){
	return view('admin.beranda');
});

Route::get('admin/kategori', function(){
	return view('admin.kategori');
});

Route::get('admin/produk', function(){
	return view('admin.produk');
});

Route::get('user/', function(){
	return view('user.index');
});

Route::get('user/kategori', function(){
	return view('user.kategori');
});

Route::get('user/produk', function(){
	return view('user.produk');
});

Route::get('user/login', function(){
	return view('user.login');
});

Route::get('user/registrasi', function(){
	return view('user.registrasi');
});