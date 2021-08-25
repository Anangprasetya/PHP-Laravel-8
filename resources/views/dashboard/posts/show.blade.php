@extends('dashboard.layouts.main')
@section('container')
<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">
            <h1>{{ $post->title }} </h1>

            <img src="https://source.unsplash.com/1200x400?{{$post->category->name}}" alt="{{$post->category->name}}" class="img-fluid">

            <article class="my-3 fs-5">
                {!! $post->body !!}
            </article>

            <a href="/posts" class="d-block mt-5">Back to Posts</a>
        </div>
    </div>
</div>
@endSection