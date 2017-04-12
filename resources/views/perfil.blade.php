@extends('layouts.main')

@section('content')
<div class="container">
	<h3>Atualizando seu Perfil</h3>
	<ul class="nav nav-tabs">
		<li class="nav-item"><a class="nav-link active" href="#">Dados</a></li>
		<li class="nav-item"><a class="nav-link" href="/perfil/cidade">Cidade</a></li>
		<li class="nav-item"><a class="nav-link" href="/perfil/foto">Foto</a></li>
	</ul>
	<hr />
	<form method="POST" action="/perfil" >
		{{ csrf_field() }}

		<div class="form-group">
			<label for="nome">Nome</label>
			<input type="text" class="form-control" name="nome" placeholder="Nome" value="{{ $perfil->nome }}">
		</div>

		<div class="form-group">
			<label for="sobrenome">Sobrenome</label>
			<input type="text" class="form-control" name="sobrenome" placeholder="Sobrenome" value="{{ $perfil->sobrenome }}">
		</div>

		<div class="form-group">
			<label for="email">Endereço de Email</label>
			<input type="email" class="form-control" name="email" placeholder="Email"  value="{{ $user->email }}">
		</div>

		<div class="form-group">
			<label for="sobrenome">Bio</label>			
            <p class="lead emoji-picker-container">
				<textarea data-emojiable="true" class="form-control" name="bio" rows="3" placeholder="Bio">{{ $perfil->bio }}</textarea>
			</p>
		</div>

		<div class="form-group">
			<label for="senha">Senha</label>
			<input type="password" class="form-control" name="senha" placeholder="Password">
		</div>

		<button type="submit" class="btn btn-default">Atualizar Perfil</button>
	</form>
</div>
@endsection