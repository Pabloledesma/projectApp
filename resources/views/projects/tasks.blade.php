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
