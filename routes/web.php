<?php

use Src\Route;

Route::add('GET', '/hello', [Controller\Site::class, 'hello'])
    ->middleware('auth');
Route::add(['GET', 'POST'], '/signup', [Controller\Site::class, 'signup']);
Route::add(['GET', 'POST'], '/login', [Controller\Site::class, 'login']);
Route::add('GET', '/logout', [Controller\Site::class, 'logout']);
Route::add(['GET', 'POST'], '/add', [Controller\Site::class, 'add']);
Route::add(['GET', 'POST'], '/find_patient', [Controller\Site::class, 'find_patient']);
Route::add(['GET', 'POST'], '/find_doctor', [Controller\Site::class, 'find_doctor']);
Route::add(['GET', 'POST'], '/record', [Controller\Site::class, 'record']);
Route::add(['GET', 'POST'], '/patient', [Controller\Site::class, 'patient']);
Route::add(['GET', 'POST'], '/cancel_record', [Controller\Site::class, 'cancel_record']);
Route::add(['GET', 'POST'], '/add_employee', [Controller\Site::class, 'add_employee']);