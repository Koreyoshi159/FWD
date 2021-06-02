@extends('common.master')

@section('title', ('Tasks'))

@section('content')
    <section class="section">
        <div class="container">
            <h1 class="title" style="display: inline-block">Tasks List</h1>
            <a href="{{ route('tasks.create') }}" class="button is-link is-pulled-right">Add Task</a>
            <table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth">
                <thead>
                <tr>
                    @foreach($columns as $column)
                        <th>{{ $column }}</th>
                    @endforeach
                    <th style="width: 15em">Options</th>
                </tr>
                </thead>
                <tbody>
                @foreach($tasks as $task)
                    <tr>
                        <td>{{ $task->id }}</td>
                        <th>{{ $task->task }}</th>
                        <td>{{ $task->description }}</td>
                        <td>{{ $task->todo == 0 ? "Todo" : "Done" }}</td>
                        <td>{{ $task->created_at }}</td>
                        <td>{{ $task->updated_at }}</td>
                        <td align="right">
                            @if($task->todo == 0)
                                <form method="POST" action="tasks/finished/{{ $task->id }}"
                                      style="display: inline-flex">
                                    @csrf
                                    @method('PUT')
                                    <button class="button is-small is-success">Approve</button>
                                </form>
                            @endif
                            <a href="{{ route('tasks.edit', $task->id) }}" class="button is-small is-info"
                               style="display: inline-flex">Edit</a>
                            <form method="POST" action="{{ route('tasks.destroy', $task->id) }}"
                                  style="display: inline-flex">
                                @csrf
                                @method('DELETE')
                                <button class="button is-small is-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection