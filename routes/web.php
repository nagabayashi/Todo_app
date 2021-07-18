<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;



Route::get('/', [TodoController::class, 'add']);  ///addにアクセスして、TodoControllerのaddメソッドを行う
Route::post('/', [TodoController::class, 'create']);
Route::get('/', [TodoController::class, 'index']);  //getメソッドは、第１引数に割り当てるアドレス、第２引数に呼び出される処理を記述
// Route::get('/edit', [TodoController::class, 'edit']);
Route::post('/', [TodoController::class, 'update']);
Route::get('/delete', [TodoController::class, 'delete']);
Route::post('/delete', [TodoController::class, 'remove']);