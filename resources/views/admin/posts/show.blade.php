@extends('admin.layouts.app')

@section('title', 'Informações do Post')

@section('content')

    <h1> Detalhes dos Postes {{ $post->title}} </h1>

    <ul>
        <li><b>Titulo: </b>{{$post->title}}</li>
        <li><b>conteudo: </b>{{$post->content}}</li>

    </ul>

    <form action="{{route('posts.destroy', $post->id)}}" method="post">
        @csrf
        <input type="hidden" name="_method" value="DELETE">
        <button type="submit">Deletar Post: {{$post ->title}}</button>
    </form>

@endsection