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
        <div class="text-secondary">
            {{ $article->category->name }} &middot; {{ $article->created_at->format('d F, Y') }}
        </div>
        <hr>
        <p>{{ $article->body }}</p>

        <button type="submit" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#exampleModal">
            Delete Article
        </button>

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">
                            Are you sure want to delete this article?
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="/articles/{{ $article->slug }}/delete" method="post">
                            @method('delete')
                            @csrf
                            <div class="d-flex">
                                <button type="submit" class="btn btn-sm btn-danger mr-3">
                                    Yes
                                </button>
                                <button type="button" class="btn bt-secondary btn-sm" data-dismiss="modal">
                                    Cancel
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">Copyright @Inixindo | 2022</div>
                </div>
            </div>
        </div>
    @endsection
</body>

</html>
