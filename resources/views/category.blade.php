@extends('layouts.main')

@section('container')
<h1 class="mb-5">Post Category : {{ $category }} </h1>
@foreach ($posts as $x)
<article>
    <h2>
        <a href="/posts/{{ $x->slug }}">{{ $x->title }}</a>
    </h2>
    <!-- <h5>By: {{ $x['author'] }} </h5> -->
    <p>{{ $x->excerpt }} </p>
</article>
@endforeach
@endSection