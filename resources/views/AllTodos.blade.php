@extends('layouts.TodoLayout')


@section('title')
Todo List
@endsection

@section('main')
<div class="container mt-5">
    <div class="row">

        @forelse ($todos as $todo)
        <div class="col-lg-3 mb-3">
            <div class="card">
                <div class="card-header">{{ $todo->title }}</div>
                <div class="card-body">
                    {{ $todo->detail }}
                    <p class="my-2">{{ $todo->deadline }}</p>
                </div>
                <div class="card-footer text-center">
                    <div class="btn-group">
                        <a href="{{ route('edit', $todo) }}" class="btn btn-sm btn-primary">Edit</a>
                        <a href="#" class="btn btn-sm btn-dark">Complete</a>
                        <a href="{{ route('delete', $todo) }}" class="btn btn-sm btn-danger">Delete</a>
                    </div>
                </div>
            </div>
        </div>
        @empty
        <h4 class="text-center">No todos found!</h4>
        @endforelse
        <nav>
            {{ $todos->links() }}
        </nav>

    </div>
</div>
@endsection