@extends('layouts.admin')
@if(Session::has('message'))
<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  {{Session::get('message')}}
</div>

@endif


@section('content')

	<table class='table'>
		<thead>
			<th>Full name</th>
			<th>Email</th>
			<th>Action</th>
		</thead>
		@foreach($users as $user)
		<tbody>
			<td>{{$user->name}}</td>
			<td>{{$user->email}}</td>
			<td>
				{!!link_to_route('user.edit', $title = 'Edit', $parameters = $user->id, $attributes = ['class'=>'btn btn-primary']);!!}
			</td>
		</tbody>	
		@endforeach
	</table>

@stop