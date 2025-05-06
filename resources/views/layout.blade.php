@include('layouts.head')
<body>
    @include('layouts.sidebar')

    @include('layouts.header')

    <main>
        {{-- main section --}}
        @yield('content')
    </main>

    @include('layouts.footer')
    @vite('resources/js/app.js')
</body>
</html>