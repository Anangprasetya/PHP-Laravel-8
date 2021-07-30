@extends('layouts.main')

@section('container')
<article>
    <h1>{{ $post->title }} </h1>
    <p>By. Anang Nur Prasetya in <a href="/categories/{{$post->category->slug}}"> {{ $post->category->name }} </a> </p>
    <!-- <h5>{{ $post->author }} </h5> -->
    <!-- {{ $post->body }} -->
    {!! $post->body !!}
</article>

<a href="/posts">Back to Posts</a>
@endSection