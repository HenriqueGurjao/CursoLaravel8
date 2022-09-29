@if ($errors->any())
<ul>
    @foreach ($errors-> all() as $error)
        <li>{{ $error }}</li>
    @endforeach
</ul>
@endif

@csrf
<input type="text" name="title" id="title" placeholder="Titulo" value="{{$post->title ?? old ('title')}}">
<textarea name="content" id="content" cols="30" rows="4" placeholder="conteúdo">{{$post->content ?? old ('content')}}</textarea>
<input type="file" name="image" id="image">
<button type="submit">Enviar</button>
