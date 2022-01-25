<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>

<body>
    @extends('layouts/master')
    @section('title', $article->title)
    @section('content')
        <h3>{{ $article->title }}</h3>
        <p>{{ $article->body }}</p>
    @endsection
</body>

</html>
