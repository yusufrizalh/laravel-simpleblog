<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>

<body>
    @extends('layouts/master')
    @section('title', 'Show Articles Page')
    @section('content')
        <h1>Show Articles page from views > articles > show.blade.php</h1>
        <p>{{ $slug }}</p>
    @endsection
</body>

</html>
