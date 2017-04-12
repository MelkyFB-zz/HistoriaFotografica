@extends('layouts.main')

@section('content')<h3>Atualizando seu Perfil</h3>
<div class="container">

	<ul class="nav nav-tabs">
		<li role="presentation"><a href="/perfil">Dados</a></li>
		<li role="presentation" class="active"><a href="/perfil/cidade">Cidade</a></li>
		<li role="presentation"><a href="/perfil/foto">Foto</a></li>
	</ul>
	<hr />
	<ul class="list-group">
	  	@foreach($estados as $estado)
		    <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#{{$estado->estado}}">{{$estado->estado}}</button>
			  <div id="{{$estado->estado}}" class="collapse">
			  	@foreach($estado->cidades()->get() as $cidade)
			    	<a href="/perfil/cidade/{{$cidade->id}}">{{ $cidade->nome }}</a>
			    @endforeach
			  </div>
		@endforeach
	</ul>
</div>
@endsection