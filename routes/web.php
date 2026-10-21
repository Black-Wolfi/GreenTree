<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomePage;

/*
Route::get('/', function(){
    return 'Test  Fitst Page  World ' ;
});
*/

Route::get('/test', function(){
    return 'Test  Hello World ' ;
});


Route::get('products', function(){
    return "Именнованная ссылка";
})->name('product.index');


Route::get('/product/{id}', function(int $id) {
    return "Товара {$id}";
})->name('product.show');

Route::get('/', [HomePage::class, 'index'])->name('home');