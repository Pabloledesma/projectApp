@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-md-12">

            <h1>Create project</h1>

            <form action="/projects" method="POST">
                @csrf

                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" name="title">
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" name="description" id="" cols="20" rows="4"></textarea>
                </div>

                <button class="btn btn-primary" type="submit">Create project</button>
                <a href="/projects" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>

@endsection

