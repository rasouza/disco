@extends('layouts.master')

@section('title')
	READ ME
@stop

@section('desc')
	<p class="lead">
		Neste website foram implementados os 3 casos de uso<br />
		necess&aacute;rios, cada item do menu representa um caso de uso.
	</p>

	<p class="lead">
		Como o Access Control List não foi desenvolvido pois não era o propósito,<br />
		em cada menu o usuário assume o papel de Usuário Comum, Dono da balada<br />
		e Administrador, respectivamente
	</p>

	<p class="lead">
		Abaixo segue a lista de baladas disponíveis para avaliação
	</p>
@stop

@section('content')
  <table class="table table-hover">
  	<thead>
  		<tr>
  			<th>Nome</th>
  			<th>Nota</th>
  		</tr>
  	</thead>
  	<tbody>
	@foreach($nightclubs as $nightclub)
		<tr>
			<td><a href="{{ URL::to('nightclub/view/' . $nightclub->id) }}">{{ $nightclub->name }}</a></td>
			<td><div class="raty" data-score="{{ $nightclub->ratio() }}"></div></td>
		</tr>
	@endforeach
	</tbody>
  </table>

  <script type="text/javascript">
  	$('div.raty').raty({
  		score: function() {
  			return $(this).attr('data-score');
  		},
  		path: '/images/',
  		readOnly: true
  	});
  </script>
@stop
