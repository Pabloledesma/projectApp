@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-md-12">

            <h1>Edit Your project</h1>

            <form action="{{ $project->path() }}" method="POST">
                @method('PATCH')
                @include('projects.form', ['buttonText' => 'Edit Project'])
            </form>
        </div>
    </div>

@endsection

