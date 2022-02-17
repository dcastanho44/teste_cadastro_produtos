@extends('site.layouts.basico')

@section ('titulo', 'Tags')

@section ('conteudo')
    
    <div class="conteudo-pagina">

        <div class="titulo-pagina-2">
            <p>Adicionar Tags</p>
        </div>

        <div class="menu">
            <ul>
                <li><a href="{{ route('tag.index') }}">Voltar</a></li>
            </ul>
        </div>
        
        <div class="informacao-pagina">
            <div style="width: 30%; margin-left: auto; margin-right: auto;">
                @component('app.tag._components.form_create_edit')
                @endcomponent
            </div>
        </div>
    </div>

@endsection