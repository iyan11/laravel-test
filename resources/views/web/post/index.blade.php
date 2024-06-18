@extends('web.layout')@section('main')@section('title', 'Новости')
<div class="container">
    <h1>Новости</h1>
        <div class="row">
        @foreach($posts as $post)
            <div class="card col" style="width: 18rem; margin: 10px">
                <div class="card-body">
                    <h5 class="card-title">{{ $post->title }}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{ $post->description }}</h6>
                    <p class="card-text">{{ $post->body }}</p>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
