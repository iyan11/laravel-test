@extends('web.layout')@section('main')
    @section('title', 'Добавить новость')
<div class="container">
    <h1>Добавление новости</h1>
    <form action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Название</label>
            <input type="text" name="title" id="title" class="form-control" required>
            <div class="invalid-feedback">
                Пожалуйста, введите название.
            </div>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Описание</label>
            <input type="text" name="description" id="description" class="form-control" required>
            <div class="invalid-feedback">
                Пожалуйста, введите описание.
            </div>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Изображение</label>
            <input type="file" name="image" id="image" class="form-control" required>
            <div class="invalid-feedback">
                Пожалуйста, прикрепите изображение.
            </div>
        </div>
        <div class="mb-3">
            <label for="body" class="form-label">Текст</label>
            <textarea name="body" id="body" class="form-control" rows="3" required></textarea>
            <div class="invalid-feedback">
                Пожалуйста, введите текст.
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Добавить</button>
    </form>
</div>

@endsection
