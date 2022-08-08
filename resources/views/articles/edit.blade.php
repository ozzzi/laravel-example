@extends('layouts.app')

@section('content')
    <div class="pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit article</h1>
    </div>
    <x-alert/>
    <div class="row">
        <div class="col-6">
            <form action="{{ route('articles.update', $article->id) }}" method="post">
                @csrf
                @method('put')
                <div class="mb-3">
                    <label for="titleInput" class="form-label">Title</label>
                    <input type="text" class="form-control" name="title" id="titleInput" placeholder="title"
                           value="{{ $article->title }}">
                </div>
                <div class="mb-3">
                    <label for="descriptionInput" class="form-label">Description</label>
                    <textarea class="form-control" name="description" rows="7">{{ $article->description }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="slugInput" class="form-label">Slug</label>
                    <input type="text" class="form-control" name="slug" id="slugInput" placeholder="slug"
                           value="{{ $article->slug }}">
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-success">Save</button>
                </div>
            </form>
        </div>
    </div>
@endsection
