<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>

<body>
    @extends('layouts/master')
    @section('content')
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h3>All Articles</h3>
                    @foreach ($articles as $article)
                        <div class="card mb-3">
                            <div class="card-header">
                                {{ $article->title }}
                            </div>
                            <div class="card-body">
                                <div>{{ Str::limit($article->body, 100, '...') }}</div>
                                <a href="/articles/{{ $article->slug }}">Read more</a>
                            </div>
                            <div class="card-footer">
                                Published on {{ $article->created_at->diffForHumans() }}
                            </div>
                        </div>
                    @endforeach
                    {{ $articles->links() }}
                </div>
            </div>
        </div>
    @endsection
</body>

</html>
