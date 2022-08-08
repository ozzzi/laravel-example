@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Articles</h1>
        <a href="{{ route('articles.create') }}" class="btn btn-primary">Create</a>
    </div>
    <x-alert />

    <table class="table">
        <thead>
            <tr>
                <th>Date</th>
                <th>Title</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        @forelse ($articles as $article)
            <tr>
                <td>{{ $article->created_at }}</td>
                <td>{{ $article->title }}</td>
                <td>
                    <form action="{{ route('articles.destroy', $article->id) }}" method="post">
                        @csrf
                        @method('delete')
                        <a href="{{ route('articles.edit', $article->id) }}" class="btn btn-primary btn-sm">Edit</a>
                        <button type="submit" class="btn btn-danger btn-sm"
                            onclick="return confirm('Are you shure?');">Delete</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="3">No articles</td>
            </tr>
        @endforelse
        </tbody>
    </table>

    {{ $articles->links() }}
@endsection
