@extends('layouts.admin')

@section('content')

	{!!Form::model($user, ['route'=> ['user.update', $user->id], 'method'=>'PUT'])!!}
		@include('user.forms.user')
		{!!Form::submit('Register', ['class'=>'btn btn-primary'])!!}
	{!!Form::close()!!}
	

@stop