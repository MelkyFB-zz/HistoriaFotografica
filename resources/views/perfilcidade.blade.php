@extends('layouts.main')

@section('content')<h3>Atualizando seu Perfil</h3>
<div class="container">

	<ul class="nav nav-tabs">
		<li class="nav-item"><a class="nav-link" href="/perfil">Dados</a></li>
		<li class="nav-item"><a class="nav-link active" href="#">Cidade</a></li>
		<li class="nav-item"><a class="nav-link" href="/perfil/foto">Foto</a></li>
	</ul>

	<hr />
	<ul class="list-group">
	  	@foreach($estados as $estado)
		    <li class="list-group-item">{{$estado->estado}}</li>
			  <ul class="list-group">
			  	@foreach($estado->cidades()->get() as $cidade)
			    	<li class="list-group-item"><a href="/perfil/cidade/?cidade={{$cidade->id}}">{{ $cidade->nome }}</a></li>
			    @endforeach
			  </li>
		@endforeach
	</ul>
</div>
@endsection