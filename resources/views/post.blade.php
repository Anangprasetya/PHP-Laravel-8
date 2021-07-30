@extends('layouts.main')

@section('container')
<article>
    <h1>{{ $post->title }} </h1>
    <p>By. <a href="" class="text-decoration-none">{{ $post->user->name }}</a> in <a href="/categories/{{$post->category->slug}}" class="text-decoration-none"> {{ $post->category->name }} </a> </p>
    <!-- <h5>{{ $post->author }} </h5> -->
    <!-- {{ $post->body }} -->
    {!! $post->body !!}
</article>

<a href="/posts" class="d-block mt-5">Back to Posts</a>
@endSection