@extends('layout')
    <!-- Because you are alive, everything is possible. - Thich Nhat Hanh -->
@section('title', 'Login')

@section('content')
    <h2>Login</h2>

    @if ( session()->has('status') )
        <p class="success-message">{{ session()->get('status') }}</p>
    @endif

    <form action="{{ route('login') }}" method="POST">
        @csrf

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>
        @error('email')
            <p class="error-message">{{ $message }}</p>
        @enderror

        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required><br><br>
        @error('email')
            <p class="error-message">{{ $message }}</p>
        @enderror

        <button type="submit">Login</button>
    </form>
@endsection