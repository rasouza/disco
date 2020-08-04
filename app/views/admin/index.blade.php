@extends('layouts.master')

@section('title')
	READ ME
@stop

@section('desc')
	<p class="lead">
		Área administrativa do site, possibilita editar para corrigir<br />
    quaisquer informações erradas ou indesejáveis
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
			<td><a href="{{ URL::to('admin/edit/' . $nightclub->id) }}">{{ $nightclub->name }}</a></td>
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
