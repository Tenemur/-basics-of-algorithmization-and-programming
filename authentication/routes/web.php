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
    return view('index');
});


// тут добавьте маршруты (все проходят через AuthController. Заготовки методов внутри уже есть):
// 1. отображение формы регистрации
// 2. осуществление регистрации
// 3. отображение формы входа
// 4. осуществление входа
// 5. осуществление выхода
