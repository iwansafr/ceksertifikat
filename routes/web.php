<?php

use App\Livewire\CertificateCheck;
use App\Livewire\Login;
use Illuminate\Support\Facades\Route;

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

Route::get('/', CertificateCheck::class);

Route::get('/admin',function(){
    return view('certificate-list');
})->middleware('auth');

Route::get('add-certificate',function(){
    return view('add-certificate');
})->middleware('auth');

Route::get('certificate-list',function(){
    return view('certificate-list');
})->middleware('auth');

Route::get('cek-sertifikat',CertificateCheck::class);

Route::get('/login',Login::class)->name('login');
Route::post('/logout',function(){

});
