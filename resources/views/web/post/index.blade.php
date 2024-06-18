@extends('web.layout')@section('main')@section('title', 'Новости')
<div class="container">
    <h1>Новости</h1>
        <div class="row">
        @foreach($posts as $post)
            <div class="card col" style="width: 18rem; margin: 10px">
                <img src="{{ $storage->url($post->image) }}" class="card-img-top" style="width: 100%">
                <div class="card-body">
                    <h5 class="card-title">{{ $post->title }}</h5>
                    <p class="card-text">{{ $post->description }}</p>
                    <a href="{{ route('post.show', $post->id) }}" class="card-link btn btn-primary">Подробнее</a>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
