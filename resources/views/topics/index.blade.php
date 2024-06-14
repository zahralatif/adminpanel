<!-- resources/views/topics/index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Topics</h1>

        <a href="{{ route('topics.create') }}" class="btn btn-primary mb-3">Create New Topic</a>

        @forelse ($topics as $topic)
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">{{ $topic->title }}</h5>
                    <p class="card-text">{{ $topic->body }}</p>
                    <a href="{{ route('topics.show', $topic) }}" class="btn btn-primary">View Topic</a>
                    <a href="{{ route('topics.edit', $topic) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('topics.destroy', $topic) }}" method="POST" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </div>
        @empty
            <p>No topics found.</p>
        @endforelse

        {{ $topics->links() }}
    </div>
@endsection
