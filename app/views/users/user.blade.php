@extends('layouts.admin')

@section('content')
<h1>Account</h1>

{{ Form::open() }}

{{ Bootform::field(array(
      'label'       => "Username",
      'name'        => "username",
      'value'       => $fields['username']
)) }}

{{ Bootform::field(array(
      'label'       => "Password",
      'name'        => "password",
      'value'       => $fields['password'],
      'type' => 'password',
      'help' => 'Leave blank to keep existing'
)) }}

{{ Bootform::field(array(
      'label'       => "Email",
      'name'        => "email",
      'value'       => $fields['email']
)) }}

{{ Bootform::field(array(
      'label'       => "Role",
      'name'        => "role",
      'value'       => $fields['role']
)) }}


<p>{{ Form::submit('Save',array('class'=>"btn btn-primary")) }}</p>

{{ Form::close() }}

@stop