<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;


Route::middleware('checklang')->group(function($lang){
    Route::get('/',function(){
        return view('welcome');
    });

    Route::get('/setland/{lang}', function($lang)
    {
        Session::put('lang', $lang);

        return redirect()->back();
    });

    Route::get('home', function(){
        return 'This is home Page';
    });
    Route::get('about', function(){
        return 'This is about Page';
    });
    Route::get('service', function(){
        return 'This is service Page';
    });
    Route::get('contact', function(){
        return 'This is contact Page';
    });

});

