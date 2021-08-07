@extends('layouts.main')

@section('container')
<h1 class="mb-5">Post Category </h1>
<div class="container">
    <div class="row">
        @foreach ($categories as $x)
        <div class="col-md-4">
            <a href="/posts?category={{$x->slug}}">
                <div class="card bg-dark">
                    <img src="https://source.unsplash.com/500x500?{{$x->name}}" class="card-img" alt="{{$x->name}}"">
                    <div class=" card-img-overlay d-flex align-items-center p-0">
                    <h5 class="card-title text-center flex-fill p-4 fs-3 text-white" style="background-color: rgba(0, 0, 0, 0.9);">{{ $x->name }} </h5>
                </div>
            </a>
        </div>
    </div>
    @endforeach
</div>
</div>



@endSection