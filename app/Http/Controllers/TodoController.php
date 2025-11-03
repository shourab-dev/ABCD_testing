<?php

namespace App\Http\Controllers;

use App\Http\Requests\TodoRequest;
use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    function homepage()
    {
        return view('Homepage');
    }

    function getAllTodos()
    {
        $todos = Todo::latest()->paginate(20);

        return view('AllTodos', compact('todos'));
    }

    function editTodo(Todo $todo)
    {
        return view('Edit', compact('todo'));
    }

    function updateTodo(TodoRequest $request, Todo $todo)
    {
        $todo->update($request->all());
        return to_route('todos')->with(['msg' => [
            'icon' => 'success',
            'res' => 'Todo successfully Updated'
        ]]);
    }

    function storeTodo(TodoRequest $request)
    {
        Todo::create($request->all());
        return to_route('todos')->with(['msg' => [
            'icon' => 'success',
            'res' => 'Todo successfully Added'
        ]]);
    }

    function deleteTodo(Todo $deleteTodo)
    {
        $deleteTodo->delete();
        return to_route('todos')->with(['msg' => [
            'icon' => 'success',
            'res' => 'Todo successfully Deleted'
        ]]);
    }
}
