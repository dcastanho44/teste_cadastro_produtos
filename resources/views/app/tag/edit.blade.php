@extends('site.layouts.basico')

@section ('titulo', 'Tags')

@section ('conteudo')
    
    <div class="conteudo-pagina">

        <div class="titulo-pagina-2">
            <p>Editar Tags</p>
        </div>

        <div class="menu">
            <ul>
                <li><a href="{{ route('tag.index') }}">Voltar</a></li>
                <li><a href="">Consulta</a></li>
            </ul>
        </div>
        
        <div class="informacao-pagina">
            <div style="width: 30%; margin-left: auto; margin-right: auto;">
                @component('app.tag._components.form_create_edit', ['tag' => $tag])
                @endcomponent
            </div>
        </div>
    </div>

@endsection