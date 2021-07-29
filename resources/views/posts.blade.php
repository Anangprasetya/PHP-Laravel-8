@extends('layouts.main')

@section('container')
@foreach($posts as $x)
<article class="mb-5">
    <h2>
        <a href="/posts/{{ $x->slug }}">{{ $x->title }}</a>
    </h2>
    <!-- <h5>By: {{ $x["author"] }} </h5> -->
    <p>{{ $x->excerpt }} </p>
</article>
@endforeach
@endSection