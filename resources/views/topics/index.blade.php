<!-- resources/views/topics/index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Topics</h1>

        @forelse ($topics as $topic)
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">{{ $topic->title }}</h5>
                    <p class="card-text">{{ $topic->body }}</p>
                    <a href="{{ route('topics.show', $topic) }}" class="btn btn-primary">View Topic</a>
                </div>
            </div>
        @empty
            <p>No topics found.</p>
        @endforelse

        {{ $topics->links() }}
    </div>
@endsection
