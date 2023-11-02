@extends('layouts.main')

@section('container')
<article>
    <h1 class="mb-5">{{ $post->title }}</h1>

    <p>By. Aufaa Husniati in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>

    {!! $post->body !!}
    <a href="/posts">Back to Post</a>
</article>

@endsection