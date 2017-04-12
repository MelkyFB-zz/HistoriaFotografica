@extends('layouts.main')

@section('content')
<div class="container">
	<form action="/subirfoto" method="POST" enctype="multipart/form-data" class="form-group">
	    {{ csrf_field() }}
	    <div class="form-group">
			<label for="arquivo_foto">Escolher foto</label>
			<input type="file" id="arquivo_foto" name="arquivo_foto">
		</div>
		<div class="form-group">		
            <p class="lead emoji-picker-container">
				<input data-emojiable="true" type="text" name="nome" class="form-control" placeholder="Nome" />
			</p>
		</div>
		<div class="form-group">
            <p class="lead emoji-picker-container">
				<textarea data-emojiable="true" class="form-control" name="bio" rows="3" placeholder="Descrição"></textarea>
			</p>
		</div>
		<button type="submit" class="btn btn-default">Enviar foto</button>
	</form>
</div>
@endsection