@extends('layouts.master')

@section('title')
	{{$nightclub->name}}
@stop

@section('desc')
	<p>
		{{$nightclub->address}}<br/>
		Entrada: R${{$nightclub->entrance}}
	</p>
@stop

@section('content')
	{{ Form::model($nightclub, array('action' => array('AdminController@editConfirm', $nightclub->id), 'role' => 'form')) }}

	<div class="form-group">
		{{ Form::label('name', 'Nome')}}
		{{ Form::text('name', null, array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('address', 'Endereço')}}
		{{ Form::text('address', null, array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('entrance', 'Entrada (R$)')}}
		{{ Form::text('entrance', null, array('class' => 'form-control')) }}
	</div>

	{{ Form::submit('Editar', array('class' => 'btn btn-default')) }}

	{{ Form::close() }}

@stop
