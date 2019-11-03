<!DOCTYPE html>
<html lang="pt-br">
<head>

   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

   <!--Let browser know website is optimized for mobile-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo')</title>
</head>

<body>
<header>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Gerenciador de Projetos</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <!-- Rota Login com atenticação pronta -->
        @if (Auth::guest())
          <li class="nav-item">
            <a class="nav-link" href="/">Login <span class="sr-only">(current)</span></a>
          </li>  
        @else     
        <li><a class="nav-link" href="{{ route('admin.projetos') }}">Home</a></li>                       
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Menus de Cadastro
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('admin.prioridades') }}">Prioridade</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="{{ route('admin.etapas') }}">Etapas</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="{{ route('admin.statusTarefas') }}">Status das Tarefas</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="{{ route('admin.tipoTarefas') }}">Tipos de Tarefas</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="{{ route('admin.versao') }}">Versão</a>
          </div>
          <li><a class="nav-link" href="{{ route('site.login.sair') }}">Sair</a></li>
        </li>
        @endif
      </ul>
    </div>
  </nav>
</header>