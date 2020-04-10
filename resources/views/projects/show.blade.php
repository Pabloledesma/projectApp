@extends('layouts.app')

@section('content')

    <h1>{{$project->title}}</h1>

    <p>{{ $project->description }}</p>

    <a class="btn btn-secondary" href="/projects">Go back</a>
    <a class="btn btn-primary" href="{{ $project->path() . '/edit' }}">Edit Project</a>

    <div class="row mt-5">
        <div class="col-md-8">
            <div class="row">
                @include('projects.tasks')
            </div>
            <div class="row mt-4">
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
            <div class="row mt-3">
                <div class="col-md-12">
                    <form action="{{ $project->path() }}" method="POST">
                        @csrf
                        @method('PATCH')

                        <textarea
                            class="form-control"
                            name="notes"
                            placeholder="Anything especial that you want to make note of?">
                            {{ $project->notes }}
                        </textarea>

                        <button class="btn btn-primary mt-2" type="submit">Update</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            @include('projects.activity.card')
        </div>
    </div>

@endsection
