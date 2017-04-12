@extends('layouts.main')

@section('content')
<div class="container">
	<h3> Seu Perfil</h3><a href="/perfil">Editar</a>
	<hr />
	@if(!empty($perfil->caminho_foto))
		<img src="{{ $perfil->caminho_foto }}" alt="" width="200px">
	@else	
		<img src="/img/semfoto.png" alt="Sem Foto" width="200px">
	@endif
	<p>Nome: {{ $user->name }}</p>
	<p>E-mail: {{ $user->email }}</p>
	<p>Bio: {{ $perfil->bio }}</p>
	<p>Cidade: 
	{{ $perfil->cidade()->get()->first()->nome }} - 
	{{ $perfil->cidade()->get()->first()->estado()->get()->first()->estado }}</p>
</div>
@endsection