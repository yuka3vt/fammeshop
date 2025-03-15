
<!doctype html>
<html data-theme="light">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <title>{{$title}}</title>
    <link rel="icon" type="image/png" href="{{asset('img/logo-1.png')}}"/>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body class="min-h-screen flex flex-col">
    {{-- Navbar Section --}}
    @include('layouts.navbar')
    {{-- End Navbar Section --}}
   
    
    @if (session('success'))
    <div class="fixed w-full max-w-sm top-6 right-4 z-50 flex flex-col space-y-2" id="notification">
        <div role="alert" class="card-alert flex items-center justify-between bg-green-300 text-black p-4 rounded-lg shadow-lg">
            <i class="fa fa-check-circle"></i>
            <div class="flex-1 ml-3">
                <h3 class="text-sm">Success message!</h3>
                <div class="text-xs">{{ session('success') }}</div>
            </div>
            <button class="btn btn-sm btn-close text-black bg-transparent"><i class="fa fa-times"></i></button>
        </div>
    </div>
    @endif
    @if (session('error'))
        <div class="fixed w-full max-w-sm top-6 right-4 z-50 flex flex-col space-y-2" id="notification">
            <div role="alert" class="card-alert flex items-center justify-between bg-red-300 text-black p-4 rounded-lg shadow-lg">
                <i class="fa fa-check-circle"></i>
                <div class="flex-1 ml-3">
                    <h3 class="text-sm">Error message!</h3>
                    <div class="text-xs">{{ session('error') }}</div>
                </div>
                <button class="btn btn-sm btn-close text-black bg-transparent"><i class="fa fa-times"></i></button>
            </div>
        </div>
    @endif

    <div id="notification-container" class="fixed w-140 top-4 right-4 z-50 flex flex-col space-y-2"></div>
    @yield('content')
    
    <!-- Footer Section -->
    @include('layouts.footer')
    {{-- End Footer Section --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{asset('js/script.js')}}"></script>
    @yield('js')
</body>
</html>