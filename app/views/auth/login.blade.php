@extends('layouts.master')

@section('content')
    <h1>Login</h1>

    {{ Form::open( array('url' => 'login') ) }}

    {{ Bootform::field(array(
      'label'       => "Username",
      'name'        => "username",
      'value'       => Input::old('username')
    )) }}

    {{ Bootform::field(array(
      'label'       => "Password",
      'name'        => "password",
      'type'        => "password"
    )) }}

    <p>{{ Form::submit('Login',array('class'=>"btn btn-primary")) }}</p>

    {{ Form::close() }}
@stop