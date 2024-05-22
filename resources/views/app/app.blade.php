<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Default Title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    @include('app.navbar')
    @include('app.sidebar')
    <div class="container mx-auto mt-5">
        @yield('content')
    </div>

    

    <script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
