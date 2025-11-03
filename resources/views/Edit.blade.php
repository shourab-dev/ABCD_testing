@extends('layouts.TodoLayout')


@section('title')
Edit Todo
@endsection

@section('main')
<div class="col-lg-5 m-auto mt-5">
    <div class="card">
        <div class="card-body">
            <form action="{{ route('update', $todo) }}" method="POST">
                @csrf
                <div class="form-group my-3">
                    <label for="">Todo Title</label>
                    <input value="{{ $todo->title }}" name="title" type="text" class="form-control" placeholder="Todo title">
                    @error('title')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group my-3">
                    <label for="">Todo Description</label>
                    <textarea name="detail" id=""  class="form-control">{{ $todo->detail }}</textarea>
                    @error('detail')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group my-3">
                    <label for="">Deadline</label>
                    <input type="date" value="{{ $todo->deadline }}" name="deadline" class="form-control" placeholder="Todo title">
                    @error('deadline')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <button class="btn btn-primary">Update Todo</button>
            </form>
        </div>
    </div>
</div>
@endsection