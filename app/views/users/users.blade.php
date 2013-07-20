@extends('layouts.admin')

@section('scripts')
<script>
$(function() {
	$('.form-delete').submit(function() {
		return confirm("Are you sure you want to delete this user?");
	});
});
</script>
@stop

@section('content')
<h1>Accounts</h1>
<p>{{ HTML::link('admin/user','Add User',array('class'=>"btn btn-primary")) }}</p>
<table class="table table-bordered sortable table-smaller table-condensed table-striped">
	<thead>
		<tr>
			<th data-sorter="false" class="filter-false">&nbsp;</th>
			<th>id</th>
			<th>Username</th>
			<th>Email</th>
			<th>Role</th>
			<th data-sorter="false" class="filter-false">&nbsp;</th>
		</tr>
	</thead>
	<tbody>
		@foreach ($users as $user)
		<tr>
			<td>{{ HTML::link('admin/user/'.$user->id,'Edit',array('class'=>"btn")) }}</td>
			<td>{{ $user->id }}</td>
			<td>{{ $user->username }}</td>
			<td>{{ $user->email }}</td>
			<td>{{ $user->role }}</td>
			<td>
				{{ Form::open(array('url' => 'admin/user/'.$user->id, 'method' => 'delete','class'=>"form-delete")) }}
				{{ Form::submit('Delete',array('class'=>"btn btn-danger btn-mini")) }}
				{{ Form::close() }}
			</td>
		</tr>
		@endforeach
	</tbody>
</table>
@stop