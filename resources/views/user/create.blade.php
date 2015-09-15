@extends('layouts.admin')

@section('content')
	
	{!!Form::open(['route'=>'user.store', 'method'=>'POST'])!!}
		@include('user.forms.user')
		{!!Form::submit('Register', ['class'=>'btn btn-primary'])!!}
	{!!Form::close()!!}
	
@stop