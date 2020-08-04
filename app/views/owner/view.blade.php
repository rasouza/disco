@extends('layouts.master')

@section('title')
	{{$nightclub->name}}
@stop

@section('desc')
	<p>
		{{$nightclub->address}}<br/>
		<strong>Entrada</strong>: R${{$nightclub->entrance}}<br/>
		<strong>Bebida mais preferida</strong>: {{ $bebida }}<br/>
		<strong>Estilo de música</strong>: {{ $musica }}<br/>
		<strong>Estilo de público</strong>: {{ $publico }}
	</p>
@stop

@section('content')
  <table class="table table-hover">
  	<thead>
  		<tr>
  			<th>Bebida favorita</th>
  			<th>Tipo de música</th>
  			<th>Tipo de Público</th>
  			<th>Proporção M/H</th>
  			<th>Nota</th>
  			<th>Comentário</th>
  		</tr>
  	</thead>
  	<tbody>
	@foreach($votes as $vote)
		<tr>
			<td>{{ $vote->drink->name }}</td>
			<td>{{ $vote->music->name }}</td>
			<td>{{ $vote->publicStyle->name }}</td>
			<td>{{ $vote->ratioMF }}%</td>
			<td>{{ $vote->grade }}</td>
			<td>{{ $vote->comment->text }}</td>
		</tr>
	@endforeach
	</tbody>
  </table>
@stop
