@extends('web.layout')@section('main')@section('title', $post->title. ' - Новости')
<div class="container">
    <h1>{{ $post->title }}</h1>
    <div class="row">
        <div class="card col" style="width: 18rem; margin: 10px">
            <img src="{{ $storage->url($post->image) }}" class="card-img-top">
            <div class="card-body">
                <p class="card-text">{{ $post->body }}</p>
            </div>
        </div>
    </div>
</div>
@endsection
