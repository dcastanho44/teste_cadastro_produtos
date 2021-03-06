@extends('site.layouts.basico')

@section ('titulo', 'Produtos')

@section ('conteudo')
    
    <div class="conteudo-pagina">

        <div class="titulo-pagina-2">
            <p>Produtos - Listar</p>
        </div>

        <div class="menu">
            <ul>
                <li><a href="{{ route('produto.create') }}">Novo</a></li>
                <li><a href="{{ route('produto.index') }}">Voltar</a></li>
            </ul>
        </div>
        
        <div class="informacao-pagina">
            <div style="width: 90%; margin-left: auto; margin-right: auto;">
                <table border="1" width="100%">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($produtos as $produto)
                            <tr>
                                <td>{{ $produto->id }}</td>
                                <td>{{ $produto->name }}</td>
                            </tr>
                            <tr>
                                <td colspan="6">
                                    <p>Lista de Produtos</p>
                                    <table border="1" style="margin:20px">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Nome</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($produto->tags as $key => $tag)
                                                <tr>
                                                    <td>{{ $tag->id }}</td>
                                                    <td>{{ $tag->nome }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
            
                        @endforeach
                    </tbody>
                </table>
                {{ $produtos->appends($request)->links() }} <!-- bot??o de pagina????o, salvando as consultas do request em todas as p??ginas -->
                
                
                <!--
                <br>
                {{ $produtos->count() }} - Total de registros por p??gina
                <br>
                {{ $produtos->total() }} - Total de registros encontrados
                <br>
                {{ $produtos->firstItem() }} - N??mero do primeiro registro da p??gina
                <br>
                {{ $produtos->lastItem() }} - N??mero do ??ltimo registro da p??gina
                !-->

                Exibindo {{ $produtos->count() }} produtos de {{ $produtos->total() }} (de {{ $produtos->firstItem() }} a {{ $produtos->lastItem() }})
            </div>
        </div>
    </div>

@endsection