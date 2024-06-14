<!-- resources/views/topics/create.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create New Topic</h1>

        <form action="{{ route('topics.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>
            <div class="form-group">
                <label for="body">Body:</label>
                <textarea class="form-control" id="body" name="body" rows="5" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Create Topic</button>
        </form>
    </div>
@endsection
