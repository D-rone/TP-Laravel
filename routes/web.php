<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CRUD;


Route::get('/', [CRUD::class, "getUsers"]);

Route::get('/createUser', [CRUD::class, "addForm"]);
Route::post('/addUser' , [CRUD::class,'addUser']);

Route::post('/deleteUser', [CRUD::class,'deleteUser']);

Route::get('/updateUserForm' , [CRUD::class,'updateUserForm']);
Route::post('/updateUser', [CRUD::class,'updateUser']);