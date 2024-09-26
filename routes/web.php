<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ReportsController;


Route::get('/about',
[PagesController::class,'about'] );

Route::get('/calculate/{num1}/{num2}',
[PagesController::class, 'calculate'] );

Route::get('/Admin', 
[PagesController::class,'Admin']);

Route::get('/services', 
[PagesController::class,'service']);

Route::resource('/reports', 
ReportsController::class);



Route::get('/', function () {
    return view('welcome'); //for the purpose of view. in resources>views
});


Route::get('/Welcome', function () {
   // return '<h2>Hello all...</h2>';
    return 5*7;
}); //static

Route::get('user/{id}', function($id){
    return 'Welcome user: '.$id;
}); //http://localhost/laratraining/public/user/Lenny, untuk data dynamic

/* Route::get('user/{id?}', function($id){
    return 'Welcome user: '.$id;
}); //http://localhost/laratraining/public/user/Lenny, untuk optional */



/* Route::get('/calculate/{num1}/{num2}', function($a,$b){
    return 'Result: '.($a+$b);
})->name('calculate'); //http://localhost/laratraining/public/calculate/a/b, untuk data dynamic

Route::get('/about',
[Pagescontroller::class,'about'] );

Route::get('/Admin', function(){
    return view('Admin.index'); //create Folder Admin, dlm Admin ada file index
}); //http://localhost/laratraining/public/Admin */
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
