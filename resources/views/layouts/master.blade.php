<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <style>
        body {
            background-color: whitesmoke;
        }

    </style>
    {{-- mengakses Bootstrap --}}
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>

<body>
    @include('layouts/navigation')
    <div class="container py-4">
        @yield('content')
    </div>
</body>

</html>
