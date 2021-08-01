@extends('layouts.main')

@section('container')

<h1 class="mb-5">{{$title}}</h1>
@foreach($posts as $x)
<article class="mb-5 border-bottom pb-3">
    <h2><a href="/posts/{{ $x->slug }}" class="text-decoration-none">{{ $x->title }}</a></h2>
    <p>By. <a href="/authors/{{$x->author->username}}" class="text-decoration-none">{{ $x->author->name }}</a> in <a href="/categories/{{$x->category->slug}}" class="text-decoration-none"> {{ $x->category->name }} </a> </p>
    <!-- <h5>By: {{ $x["author"] }} </h5> -->
    <p>{{ $x->excerpt }} </p>

    <a href="/posts/{{ $x->slug }}" class="text-decoration-none">Read more...</a>
</article>
@endforeach
@endSection