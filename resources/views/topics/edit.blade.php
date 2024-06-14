<!-- resources/views/topics/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Topic</h1>

        <form action="{{ route('topics.update', $topic) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $topic->title }}" required>
            </div>
            <div class="form-group">
                <label for="body">Body:</label>
                <textarea class="form-control" id="body" name="body" rows="5" required>{{ $topic->body }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update Topic</button>
        </form>
    </div>
@endsection
