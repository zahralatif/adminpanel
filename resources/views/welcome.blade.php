<!-- resources/views/welcome.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container-fluid bg-light" style="height: 100vh; display: flex; justify-content: center; align-items: center;">
        <div class="card shadow-lg" style="max-width: 600px;">
            <div class="card-body p-10 text-center">
                <h1 class="display-4 text-info mb-4">Welcome to Our Forum</h1>
                <p class="lead mb-4">Join the community and start discussing topics that matter to you.</p>
                <div class="mb-4">
                    <a href="{{ route('login') }}" class="btn btn-info btn-lg mr-3">Login</a>
                    <a href="{{ route('register') }}" class="btn btn-outline-info btn-lg">Register</a>
                </div>
                <p class="text-muted">Already a member? <a href="{{ route('login') }}" class="text-info">Login here</a>.</p>
            </div>
        </div>
    </div>
@endsection
