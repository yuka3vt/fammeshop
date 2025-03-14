
<!doctype html>
<html data-theme="light">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>{{$title}}</title>
    @vite('resources/css/app.css')
</head>
<body class="min-h-screen flex flex-col">
    {{-- Navbar Section --}}
    @include('layouts.navbar')
    {{-- End Navbar Section --}}

    @yield('content')

    
    <!-- Footer Section -->
    @include('layouts.footer')
    {{-- End Footer Section --}}
</body>
</html>