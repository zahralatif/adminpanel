<!-- resources/views/replies/show.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Replies for {{ $topic->title }}</h1>

        <a href="{{ route('topics.show', $topic) }}" class="btn btn-primary mb-3">Back to Topic</a>

        @forelse ($topic->replies as $reply)
            <div class="card mb-3">
                <div class="card-body">
                    <p class="card-text">{{ $reply->content }}</p>
                    <a href="{{ route('replies.edit', ['topic' => $topic, 'reply' => $reply]) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('replies.destroy', ['topic' => $topic, 'reply' => $reply]) }}" method="POST" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </div>
        @empty
            <p>No replies yet. Be the first to reply!</p>
        @endforelse
    </div>
@endsection
