<header>
    <h1>Product Management System</h1>
    <nav style="display: flex; justify-content: space-between; align-items: center;">
        <ul style="display: flex; list-style: none; gap: 1rem; margin: 0; padding: 0;">
            <li><a href="{{ route('index') }}">Home</a></li>
            <li><a href="{{ route('contact') }}">Contact</a></li>
            <li><a href="{{ route('about') }}">About</a></li>
            <li><a href="{{ route('faq') }}">FAQ</a></li>
        </ul>
        @guest
            <div class="auth-buttons">
                <a href="{{ route('login') }}">
                    <button type="button">Login</button>
                </a>
                <a href="{{ route('register') }}">
                    <button type="button">Register</button>
                </a>
            </div>
        @else
            <div id="logout-btn">
                <span>{{ Auth::user()->name }}</span>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit">Logout</button>
                </form>
            </div>
        @endguest
    </nav>
</header>
