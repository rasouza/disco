@extends('layouts.master')

@section('title')
	READ ME
@stop

@section('desc')
	<p class="lead">
		Aqui é possível receber o feedback da balada, assumindo o papel<br />
		de dono do estabelecimento
	</p>

	<p class="lead">
		As características do estabelecimento são modificadas com base<br />
		nas avaliações dos usuários
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
			<td><a href="{{ URL::to('owner/view/' . $nightclub->id) }}">{{ $nightclub->name }}</a></td>
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
