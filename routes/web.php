<?php

use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TodoController::class, 'homepage'])->name('homepage');
Route::get('/todos', [TodoController::class, 'getAllTodos'])->name('todos');
Route::get('/edit/{todo}', [TodoController::class, 'editTodo'])->name('edit');
Route::get('/delete/{deleteTodo}', [TodoController::class, 'deleteTodo'])->name('delete');

Route::post('/update/{todo}', [TodoController::class, 'updateTodo'])->name('update');

Route::post('/store', [TodoController::class, 'storeTodo'])->name('store');
