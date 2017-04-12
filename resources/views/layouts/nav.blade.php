<nav class="navbar navbar-toggleable-md navbar-light bg-faded">
    <!-- Brand and toggle get grouped for better mobile display -->
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="#">História Viva</a>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="navbar-nav mr-auto">

        <li class="nav-item"><a class="nav-link"  href="#">Home <span class="sr-only">(atual)</span></a></li>

        <li class="nav-item"><a class="nav-link" href="#">Fotos</a></li>

        <li class="nav-item dropdown">
          @if(isset($cidade_selecionada))
            <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Cidade({{ $cidade_selecionada->nome }})
            </a>
          @else
            <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Cidade
            </a>
          @endif
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            @if(count($estados))
              @foreach($estados as $estado)
                  <a href="#" class="dropdown-item">{{ $estado->estado }} <span class="caret"></span>
                  </a>
              @endforeach
            @else
              <a href="#" class="dropdown-item">Não há estados cadastrados</a>
            @endif
          </ul>
        </li>
      </ul>

      <form class="form-inline">
        <input class="form-control mr-sm-2" type="text" placeholder="Procurar">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Procurar</button>
      </form>

      <ul class="nav navbar-nav navbar-right">
        @if(Auth::check())
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownaccLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            {{ substr($user->name,0,strpos($user->name,' ')) }}
            <span class="caret"></span></a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownaccLink">
              <a class="dropdown-item" href="{{ url('/perfil') }}">Perfil</a>
              <a class="dropdown-item" href="{{ url('/subirfoto') }}">Subir Foto</a>
              <a class="dropdown-item" href="{{ url('/logout') }}">Sair</a>
            </ul>
          </li>
        @else
             <li class="nav-item"><a class="nav-link" href="{{ url('/login') }}">Entrar</a></li>
             <li class="nav-item"><a class="nav-link" href="{{ url('/register') }}">Cadastrar</a></li>
        @endif
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>