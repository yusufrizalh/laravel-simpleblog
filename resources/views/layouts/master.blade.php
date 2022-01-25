<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Master Page</title>
    <style>
        body {
            background-color: wheat;
        }
    </style>
</head>

<body>
    @include('layouts/navigation')
    @yield('content')
</body>

</html>
