@extends('site.layouts.basico')

@section ('titulo', 'Tags')

@section ('conteudo')
    
    <div class="conteudo-pagina">

        <div class="titulo-pagina-2">
            <p>Tags</p>
        </div>

        <div class="menu">
            <ul>
                <li><a href="{{ route('tag.create') }}">Nova Tag</a></li>
                <li><a href="#">Consulta</a></li>
            </ul>
        </div>
        
        <div class="informacao-pagina">
            <div style="width: 90%; margin-left: auto; margin-right: auto;">
                <table border="1" width="100%">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tag</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($tags as $tag)
                            <tr>
                                <td>{{ $tag->id }}</td>
                                <td>{{ $tag->name }}</td>
                                <td>
                                    <form id="form_{{$tag->id}}" method="post" action="{{ route('tag.destroy', ['tag' => $tag->id])}}">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit">Excluir</button>
                                        <!--<a href="#" onClick="document.getElementbyId('form_{{$tag->id}}').submit()">Deletar</a>-->
                                        
                                    </form>
                                </td>
                                <td><a href="{{ route('tag.edit', ['tag' => $tag->id]) }}"> Editar</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $tags->appends($request)->links() }} <!-- botão de paginação, salvando as consultas do request em todas as páginas -->
                
                
                <!--
                <br>
                {{ $tags->count() }} - Total de registros por página
                <br>
                {{ $tags->total() }} - Total de registros encontrados
                <br>
                {{ $tags->firstItem() }} - Número do primeiro registro da página
                <br>
                {{ $tags->lastItem() }} - Número do último registro da página
                !-->
                <br>
                Exibindo {{ $tags->count() }} tags de {{ $tags->total() }} (de {{ $tags->firstItem() }} a {{ $tags->lastItem() }})
            </div>
        </div>
    </div>

@endsection