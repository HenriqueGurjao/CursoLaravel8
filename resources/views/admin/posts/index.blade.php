@extends('admin.layouts.app')

@section('title','Listagem dos Post')

@section('content')
    
    <h1>Postagem</h1>
    <form action="{{route('posts.search')}}" method="post">
        @csrf
        <input type="text" name="search" placeholder="Filtrar: ">
        <button type="submit">Filtrar</button>  
    </form>


    @foreach ($posts as $post)
        
        <p> 
            <img src="{{url("storege/{$post->image}")}}" alt="{{$post->title}}" style="max-width:100px" >
            {{ $post->title }} 
            [
                <a href="{{route('posts.show', $post->id)}}"> ver detalhes</a>  || 
                <a href="{{route('posts.edit', $post->id)}}"> editar</a>
            ]
        </p>
        
    @endforeach
    
    <form action="{{route('posts.index')}}">
        <input type="submit" value="Voltar" />
    </form>

    <form action="{{route('posts.create')}}">
        <input type="submit" value="Criar novo post" />
    </form>

    @if (session('message'))
        <div>
            {{session('message')}}
        </div>
    @endif

    <hr> 


    @if (@isset($filters) )
        {{$posts->appends($filters)->links()}}
    @else
        {{$posts->links()}}
    @endif

    
@endsection