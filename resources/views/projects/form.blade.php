@csrf
<div class="form-group">
    <label for="title">Title</label>
    <input
        type="text"
        class="form-control"
        name="title"
        value="{{ $project->title }}"
        required
        >
</div>

<div class="form-group">
    <label for="description">Description</label>
    <textarea class="form-control" name="description" required>
        {{ $project->description }}
    </textarea>
</div>

<div class="form-group">
    <label for="notes">Notes</label>
    <textarea class="form-control" name="notes">
        {{ $project->notes }}
    </textarea>
</div>

<button class="btn btn-primary" type="submit">{{ $buttonText }}</button>
<a href="{{ $project->path() }}" class="btn btn-secondary">Cancel</a>

@if($errors->any())
<div class="alert alert-danger mt-5" role="alert">
    @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
</div>
@endif
