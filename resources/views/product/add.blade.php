@extends('layout')

@section('title', 'Add Product')

@section('content')
<section>
    <h2>Add New Product</h2>
    <form action="{{ route('product.add.action') }}" method="post">
        @csrf
        
        {{-- <label>Seller's ID:</label> --}}
        <input type="hidden" name="user_id" value="{{ Auth::id() }}" required>
        @error('user_id')
            <p class="error">{{ $message }}</p>
        @enderror

        <label>Product Name:</label>
        <input type="text" name="name" required>
        @error('name')
            <p class="error">{{ $message }}</p>
        @enderror

        <label>Price:</label>
        <input type="number" name="price" step="0.01" required>
        @error('price')
            <p class="error">{{ $message }}</p>
        @enderror

        <label>Description:</label>
        <textarea name="description" rows="4" cols="50"></textarea>
        @error('description')
            <p class="error">{{ $message }}</p>
        @enderror

        <label>Quantity:</label>
        <input type="number" name="quantity" required>
        @error('quantity')
            <p class="error">{{ $message }}</p>
        @enderror

        <button type="submit">Add Product</button>
    </form>
</section>
@endsection