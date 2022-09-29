@extends('admin.layouts.app')

@section('title', 'Editor de Posts') 

@section('content')
    <h1>editor do Post {{$post->title}}</h1>

    <form action='{{route('posts.update',$post->id)}}' method="post" enctype="multipart/form-data">
        @method('put')
        @include('admin.posts._partials.forms')
    </form>
@endsection