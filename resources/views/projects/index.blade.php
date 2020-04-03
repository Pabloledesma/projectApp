@extends('layouts.app')

@section('content')

    <h2>My Projects</h2>

    <a href="/projects/create">Create new project</a>
    <div class="row">
        @forelse ($projects as $project)
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-header"><a href="{{ $project->path() }}">{{ $project->title }}</a></div>
                    <div class="card-body">
                        <p class="card-text">{{ $project->description }}</p>
                    </div>
                </div>
            </div>
        @empty
            <h3>No projects yet.</h3>
        @endforelse
    </div>


@endsection

