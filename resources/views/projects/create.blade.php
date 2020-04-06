@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-md-12">

            <h1>Create project</h1>

            <form action="/projects" method="POST">

                @include('projects.form', [
                    'project' => new App\Project,
                    'buttonText' => 'Create Project'
                ])
            </form>
        </div>
    </div>

@endsection

