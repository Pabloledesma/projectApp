@extends('layouts.app')

@section('content')

    <h1>{{$project->title}}</h1>

    <p>{{ $project->description }}</p>

    <a href="/projects">Go back</a>

    <div class="row">
        <div class="list-group">
            @forelse ($project->tasks as $task)
                <a href="#" class="list-group-item list-group-item-action active">
                    <!--<div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">Task title</h5>
                        <small>3 days ago</small>
                    </div>-->
                    <p class="mb-1">{{ $task->body }}</small>
                </a>
            @empty
                <p>No tasks yet</p>
            @endforelse
        </div>
    </div>
@endsection
