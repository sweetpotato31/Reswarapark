<?php

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

Route::get('/', function () {
    return view('pages.index');
})->name('home');

Route::get('keunggulan', function(){
    return view('pages.keunggulan');
})->name('keunggulan');

Route::get('lokasi', function(){
    return view('pages.lokasi');
})->name('lokasi');

Route::get('unit', function(){
    return view('pages.unit');
})->name('unit');

Route::get('contact', function(){
    return view('pages.contact');
})->name('contact');

Route::get('artikel', function(){
    return view('pages.artikel');
})->name('artikel');

Route::get('tentang-kami', function(){
    return view('pages.tentang-kami');
})->name('tentang-kami');

Route::get('detail-artikel/{slug}', function($slug){
    if($slug == 'keunggulan-memiliki-rumah-area-jakarta-timur'){
        return view('pages.detail-artikel-1');
    }else{
        return view('pages.detail-artikel-2');
    }
    return view('pages.detail-artikel');
})->name('detail-artikel');
