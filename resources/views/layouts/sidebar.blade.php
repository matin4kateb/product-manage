<aside>
    <h1>Product Manager</h1>
    <nav>
        <ul>
            @auth
                <li><a href="{{ route('product.add') }}">Add Product</a></li>
                <li><a href="{{ route('product.view') }}">View Products</a></li>
            @else
                <p>Please login to view and add products</p>
            @endauth
        </ul>
    </nav>
</aside>