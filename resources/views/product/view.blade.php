@extends('layout')

@section('title', 'View Products')

@section('content')
<section>
    <h2>Product List</h2>

    <table border="1">
        <thead>
            <tr>
                <th>Product ID</th>
                <th>Seller</th>
                <th>Name</th>
                <th>Price</th>
                <th>Description</th>
                <th>Quantity</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->user->name }} {{ $product->user->lastname }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->price }}</td>
                    <td>
                        @if (is_null($product->description))
                            No Description
                        @else
                            {{ $product->description }}
                        @endif
                    </td>
                    <td>{{ $product->quantity }}</td>

                    {{-- Display Edit/Delete buttons if user is authorized --}}
                    @auth
                        <td>
                        @if (Auth::id() == $product->user_id)
                            <table><tr>
                                <td><form action="{{ route('product.update', $product) }}" method="get">
                                    <button type="submit">
                                        Edit
                                    </button> 
                                </form></td>
                                
                                <td><form action="{{ route('product.delete', $product) }}" method="post">
                                @csrf
                                @method('DELETE')
                                {{-- <a href="{{ route('product.delete', $product) }}" type="submit"
                                    onclick="return confirm('Are you sure to delete?')">Delete</a> --}}
                                <button type="submit" onclick="return confirm('Are you sure?')">
                                    Delete
                                </button>
                                </form></td>
                            </tr></table>
                        @else
                            <p>Unauthorized</p>
                        @endif
                    @else
                        <p>Please login to see the products.</p>
                    @endauth
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</section>
@endsection