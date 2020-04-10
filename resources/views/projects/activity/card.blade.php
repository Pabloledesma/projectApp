<h5>Activity history</h5>
<ul>
@foreach ($project->activity as $activity)
    <li>
        @include("projects.activity.{$activity->description}")
        <span class="text-muted">{{ $activity->created_at->diffForHumans(null, true) }}</span>
    </li>
@endforeach
</ul>
