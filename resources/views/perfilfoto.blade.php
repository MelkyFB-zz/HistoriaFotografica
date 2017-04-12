@extends('layouts.main')

@section('content')<h3>Atualizando seu Perfil</h3>
<div class="container">
	<ul class="nav nav-tabs">
		<li class="nav-item"><a class="nav-link" href="/perfil">Dados</a></li>
		<li class="nav-item"><a class="nav-link" href="/perfil/cidade">Cidade</a></li>
		<li class="nav-item"><a class="nav-link active" href="#">Foto</a></li>
	</ul>
	<hr />

	@if(!empty($perfil->caminho_foto))
		<img src="{{ $perfil->caminho_foto }}" alt="" width="200px">
	@else	
		<img src="/img/semfoto.png" alt="Sem Foto" width="200px">
	@endif

	<form action="/perfil/foto" method="POST" enctype="multipart/form-data" class="form-group">
	    {{ csrf_field() }}
	    <div class="form-group">
			<label for="arquivo_foto">Escolher foto</label>
			<input type="file" id="arquivo_foto" name="arquivo_foto">
		</div>		
		<button type="submit" class="btn btn-default">Enviar foto</button>
	</form>

</div>
@endsection