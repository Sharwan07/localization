<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;


Route::middleware('checklang')->group(function($lang){
    Route::get('/',function(){
        return view('home');
    });

    Route::fallback(function () {
        return 'Page Not Found!';
    });

    Route::get('/setland/{lang}', function($lang)
    {
        Session::put('lang', $lang);

        return redirect()->back();
    });

    Route::get('home', function(){
        return view('home');
    });
    Route::get('about', function(){
        return view('about');
    });
    Route::get('service', function(){
        return view('service');
    });
    Route::get('contact', function(){
        return view('contact');
    });

});

