<!DOCTYPE html>
<html lang="en">
<head>
    <title>Livewire</title>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <livewire:styles />
    <livewire:scripts />
    <script src="{{ asset('js/app.js') }}"></script>
</head>
<body class="flex flex-wrap justify-center">
    <div class="flex w-full px-4 text-white bg-purple-900 justify-between">
        <a href="/" class="py-4 mx-3">Home</a>
        @auth
            <livewire:logout />
        @endauth
        @guest
            <div class="py-4">
                <a href="/login" class="mx-3">Login</a>
                <a href="/register" class="mx-3">Register</a>
            </div>
        @endguest
    </div>
    <div class="flex w-full justify-center my-10">
        @yield('content')
    </div>
</body>
</html>


