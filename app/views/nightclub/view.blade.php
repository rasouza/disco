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
	{{ Form::open(array('action' => array('NightclubController@rateNightclub', $nightclub->id), 'role' => 'form')) }}

	<div class="form-group">
		{{ Form::label('drink_id', 'Drink favorito')}}
		{{ Form::select('drink_id', $drinks, null, array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('music_id', 'Estilo de música')}}
		{{ Form::select('music_id', $musics, null, array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('public_id', 'Estilo de público')}}
		{{ Form::select('public_id', $publics, null, array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('ratioMF', 'Proporção Mulher/Homem')}}
		{{ Form::text('ratioMF',null, array(
				'class' => 'slider',
				'data-slider-min' => 0,
				'data-slider-max' => 100,
				'data-slider-step' => 1,
				'data-slider-value' => 0,
				'data-slider-orientation' => 'horizontal',
				'value' => 0
		)) }}
		%
	</div>

	<div class="form-group">
		<label for="ratioMF">Nota</label>
		<div class="raty"></div>
	</div>

	<div class="form-group">
		{{ Form::label('comment', 'Comentário')}}
		{{ Form::textarea('comment', null, array('class' => 'form-control'))}}
	</div>

	<button type="submit" class="btn btn-default">Enviar</button>

	{{ Form::close()}}

	<script type="text/javascript">
		$('.slider').slider();
		$('div.raty').raty({path: '/images/'});
	</script>
@stop
