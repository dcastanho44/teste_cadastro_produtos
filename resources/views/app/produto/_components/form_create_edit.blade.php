@if(isset($produto->id))
    <form method="post" action="{{ route('produto.update', ['produto' => $produto->id]) }}">
        @csrf
        @method('PUT')
@else
    <form method="post" action="{{ route('produto.store') }}">
        @csrf
@endif
    
    <input type="text" name="name" value="{{ $produto->name ?? old('name') }}" placeholder="Nome" class="borda-preta">
    {{ $errors->has('name') ? $errors->first('name') : '' }}
    
    <div class=" mt-2">
        <select name="tags[]" id="tags" class="form-select" multiple>
            @foreach($tags as $tag)
                <option value="{{ $tag->id }}" {{ ($produto->tag_id ?? old('tag_id')) == $tag->id ? 'selected' : '' }}> {{ $tag->name }}</option>
            @endforeach
        </select>
    </div>
    {{ $errors->has('tag_id') ? $errors->first('tag_id') : '' }}

    <button type="submit" class="borda-preta">Cadastrar</button>
    </form>