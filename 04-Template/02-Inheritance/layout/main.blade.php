<html>
    <head>
        <title>Página Principal</title>
    </head>
    <body>

        {{-- A diretiva @yield('content') é utilizada para mostrar o conteudo na página --}}
        <div class="container">
            @yield('content')
        </div>

        {{-- Enquanto a diretiva @yield('footer') mostrará o footer na página --}}
        @yield('footer')
    </body>
</html>