@extends('layouts.main')

@section('container')
@foreach ($posts as $post)
<article class="mb-5">
    <h2>
        <a href="/posts/{{ $post->slug }}">{{ $post->title }}</a>
        <p>{{ $post->excerpt }}</p>
    </h2>
    <p>{{ $post->excerpt }}</p>
</article>
@endforeach
@endsection