<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Promobit Teste @yield('titulo')</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="{{ asset('css/estilo.css') }}">   <!-- o helper asset sempre aponta para a pasta public -->   
    </head>
    <body>
        @include('site.layouts._partials.topo')
        @yield('conteudo')
    </body>
</html>