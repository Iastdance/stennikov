@vite('resources/css/app.css')

@include('layouts/header')

<main>
    @yield('content')
</main>

@include('layouts/footer')
