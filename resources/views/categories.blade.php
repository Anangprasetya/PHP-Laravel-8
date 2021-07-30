@extends('layouts.main')

@section('container')
<h1 class="mb-5">Post Category </h1>
@foreach ($categories as $x)
<ul>
    <li>
        <h2><a href="/categories/{{ $x->slug }}">{{ $x->name }}</a></h2>
    </li>
</ul>
@endforeach
@endSection