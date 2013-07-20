@extends('layouts.master')

@section('content')

<h1>Tasks</h1>
<div id="task-list">
{{-- */$ct=0;/* --}}
@foreach($tasks as $task)
	{{-- */$ct++;/* --}}
	{{-- Display row grouping every 3 items --}}
	@if ($ct == 1)
	<div class="row-fluid">
	@endif
		<div id="task-{{$task->id}}" class="task span4">
		    <div class="task-header" data-toggle="collapse" data-target="#task-{{$task->id}}-content">
		    	<span class="pull-right task_date_due">{{$task->date_due}}</span>
		    	<span class="task_name">{{$task->name}}</span>
		    </div>
		    <div id="task-{{$task->id}}-content" class="collapse task-content">
		    	{{$task->private}} / {{$task->status}} / {{$task->alarm}} / Created: {{$task->created_at}}
			<div class="details">{{$task->details_html}}</div>
			@if(!empty($task->notes))
			<div class="notes">{{$task->notes_html}}</div>
			@endif
			<a class="btn btn-block btn-primary" href="{{ url('task/'.$task->id) }}">Edit</a>
		    </div>

		</div>
	@if ($ct == 3)
	</div>
	{{-- */$ct=0;/* --}}
	@endif
@endforeach
</div>
<h1>Completed</h1>
@stop