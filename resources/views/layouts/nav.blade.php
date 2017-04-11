<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Mudar Navegação</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">História Fotografada</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home <span class="sr-only">(atual)</span></a></li>
        <li><a href="#">Fotos</a></li>
        <li class="dropdown">          
          @if(isset($cidade_selecionada))
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cidade({{ $cidade_selecionada->nome }})<span class="caret"></span></a>
          @else
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Cidade<span class="caret"></span></a>
          @endif
          <ul class="dropdown-menu">
            @if(count($estados))
              @foreach($estados as $estado)
                <li class="dropdown-submenu">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ $estado->estado }} <span class="caret"></span>
                    <ul class="dropdown-menu">
                      @if(count($estado->cidades()->get()))
                        @foreach($estado->cidades()->get() as $cidade)
                          <li><a href="/?cidade={{ $cidade->id }}">{{ $cidade->nome }}</a></li>
                        @endforeach
                      @else
                        <li><a href="#">{{ $estado->nome }} sem cidades cadastradas</a></li>
                      @endif
                    </ul>
                  </a>
                </li>
              @endforeach
            @else
              <li><a href="#">Não há estados cadastrados</a></li>
            @endif
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Procurar">
        </div>
        <button type="submit" class="btn btn-default">Procurar</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        @if(Auth::check())
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
            {{ substr($user->name,0,strpos($user->name,' ')) }}
            <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="{{ url('/perfil') }}">Perfil</a></li>
              <li><a href="{{ url('/subirfoto') }}">Subir Foto</a></li>
                <li><a href="{{ url('/logout') }}">Sair</a></li>
            </ul>
          </li>
        @else
            <li><a href="{{ url('/login') }}">Entrar</a></li>
            <li><a href="{{ url('/register') }}">Cadastrar</a></li>
        @endif
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>