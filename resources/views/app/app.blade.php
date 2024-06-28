<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Default Title')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    @include('app.navbar')
    @include('app.sidebar')
    
    <div class="container mx-auto mt-5">
        @yield('content')
    </div>

    

    @yield('scripts')
</body>
</html>
