@extends('layouts.main')

@section('container')

<h1 class="mb-5">{{$title}}</h1>

@if($posts->count())
<div class="card mb-3">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
</div>
@else
<p class="text-center fs-4">No Post found.</p>
@endif

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