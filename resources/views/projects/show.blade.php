@extends('layouts.app')

@section('content')

    <h1>{{$project->title}}</h1>

    <p>{{ $project->description }}</p>

    <a href="/projects">Go back</a>

    <div class="row">
        @foreach ($project->tasks as $task)
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ $task->path() }}" method="POST">
                        @method('PATCH')
                        @csrf
                        <div class="row">
                            <div class="col-md-8">
                                <input class="form-control" type="text" name="body" value="{{ $task->body }}" {{ $task->completed ? 'disabled' : '' }}>
                            </div>
                            <div class="col-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="completed" onchange="this.form.submit()" {{ $task->completed ? 'checked' : '' }}>
                                    <label class="form-check-label" for="completed">
                                      Completed
                                    </label>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <div class="row mt-5">
        <div class="col-md-12">
            <form action="{{ $project->path() . '/tasks' }}" method="POST">
                @csrf
                <div class="form-row">
                    <div class="col-md-8 mb-3">
                        <input class="form-control" name="body" type="text" placeholder="Begin adding tasks...">
                    </div>
                    <div class="col-md-4">
                        <button class="btn btn-primary" type="submit">Create Task</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
