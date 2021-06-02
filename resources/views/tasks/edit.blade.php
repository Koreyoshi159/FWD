@extends('common.master')

@section('title', ('Tasks'))

@section('content')
    <section class="section">
        <div class="container">
            <h1 class="title">Create Task</h1>
            <form method="POST" action="{{ route('tasks.update', $task) }}">
                @csrf
                @method('PUT')
                <div class="field">
                    <label class="label" for="task">Task</label>
                    <div class="control">
                        <input class="input @error('task') is-danger @enderror" type="text" name="task"
                               placeholder="Task" value="{{ $task->task }}">
                        @error('task')
                        <p class="help is-danger">{{ $errors->first('task') }}</p>
                        @enderror
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="description">Description</label>
                    <div class="control">
                        <input class="input @error('description') is-danger @enderror" type="text" name="description"
                               placeholder="Description" value="{{ $task->description }}">
                        @error('description')
                        <p class="help is-danger">{{ $errors->first('description') }}</p>
                        @enderror
                    </div>
                </div>

                <div class="field is-grouped">
                    <div class="control">
                        <button class="button is-link" type="submit">Edit</button>
                    </div>
                    <div class="control">
                        <a href="{{ route('tasks.index') }}" class="button is-link is-light">Cancel</a>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection