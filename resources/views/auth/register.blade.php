@extends('layout')

@section('title', 'Register')

@section('content')
<h2>Register</h2>
<form method="POST" action="{{ route('register') }}">
    @csrf
    
    <label for="national_id">National ID:</label><br>
    <input type="text" id="national_id" name="national_id" value="{{ old('national_id') }}" required><br><br>
    @error('national_id')
        <p class="error-message">{{ $message }}</p>
    @enderror

    <label for="password">Password:</label><br>
    <input type="password" id="password" name="password" required><br><br>
    @error('password')
        <p class="error-message">{{ $message }}</p>
    @enderror

    <label for="password_confirmation">Confirm Password:</label><br>
    <input type="password" name="password_confirmation" required><br><br>
    @error('password_confirmation')
        <p class="error-message">{{ $message }}</p>
    @enderror

    <label for="name">First Name</label><br>
    <input type="text" id="name" name="name" value="{{ old('name') }}" required><br><br>
    @error('name')
        <p class="error-message">{{ $message }}</p>
    @enderror

    <label for="lastname">Last Name</label><br>
    <input type="text" id="lastname" name="lastname" value="{{ old('lastname') }}" required><br><br>
    @error('lastname')
        <p class="error-message">{{ $message }}</p>
    @enderror

    <label for="city">City</label><br>
    <input type="text" id="city" name="city" value="{{ old('city') }}" required><br><br>
    @error('city')
        <p class="error-message">{{ $message }}</p>
    @enderror

    <label for="address">Address</label><br>
    <input type="text" id="address" name="address" value="{{ old('address') }}" required><br><br>
    @error('address')
        <p class="error-message">{{ $message }}</p>
    @enderror

    <label for="email">Email</label><br>
    <input type="email" id="email" name="email" value="{{ old('email') }}" required><br><br>
    @error('email')
        <p class="error-message">{{ $message }}</p>
    @enderror

    <label for="phone">Phone</label><br>
    <input type="tel" id="phone" name="phone" value="{{ old('phone') }}" required><br><br>
    @error('phone')
        <p class="error-message">{{ $message }}</p>
    @enderror

    <button type="submit">Register</button>
</form>

@endsection