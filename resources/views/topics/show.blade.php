<!-- resources/views/topics/show.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $topic->title }}</h1>
        <p>{{ $topic->body }}</p>

        <hr>

        <h3>Replies</h3>

        @forelse ($topic->replies as $reply)
            <div class="card mb-3">
                <div class="card-body">
                    <p class="card-text">{{ $reply->content }}</p>
                </div>
            </div>
        @empty
            <p>No replies yet. Be the first to reply!</p>
        @endforelse

        <hr>

        <!-- Reply Form -->
        @auth
            <form action="{{ route('replies.store', $topic) }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="reply_content">Reply:</label>
                    <textarea class="form-control" id="reply_content" name="content" rows="3" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit Reply</button>
            </form>
        @else
            <p>Please <a href="{{ route('login') }}">login</a> to reply.</p>
        @endauth
    </div>
@endsection
