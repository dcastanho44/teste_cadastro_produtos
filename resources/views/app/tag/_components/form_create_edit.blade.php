@if(isset($tag->id))
    <form method="post" action="{{ route('tag.update', ['tag' => $tag->id]) }}">
        @csrf
        @method('PUT')
@else
    <form method="post" action="{{ route('tag.store') }}">
        @csrf
@endif
    
    <input type="text" name="name" value="{{ $tag->name ?? old('name') }}" placeholder="Tag" class="borda-preta">
    {{ $errors->has('name') ? $errors->first('name') : '' }}
    
    <button type="submit" class="borda-preta">Cadastrar</button>
    </form>