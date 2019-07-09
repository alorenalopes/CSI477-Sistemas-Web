<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>@yield('titulo', 'Sistema Acadêmico')</title>
  </head>
  <body>
    <!-- Exibir mensagens -> campo: mensagem //-->
    @if( Session::has('mensagem') )
      <p><strong>{{ Session::get('mensagem') }}</strong></p>
    @endif

    <!-- Links - menu lateral //-->
    <ul>
        <li><a href="/">Home</a></li>
        <li><a href="/welcome">About</a></li>
        <li><a href="/alunos/listar">Listar</a></li>
        <li><a href="/estados">Estados</a></li>
    </ul>

    <!-- Conteúdo - parte central //-->
    @yield('conteudo')

    <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
    <script src="{{ asset('js/codigo.js') }}"></script>

  </body>
</html>
