@extends('layouts.app')

@section('content')

    <h1>Create project</h1>

    <form action="/projects" method="POST">
        @csrf
        <input type="text" name="title" placeholder="Title">

        <textarea name="description" id="" cols="30" rows="10"></textarea>

        <button type="submit">Create project</button>
        <a href="/projects">Cancel</a>
    </form>

@endsection
