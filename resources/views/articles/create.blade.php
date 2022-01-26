<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>

<body>
    @extends('layouts/master')
    @section('title', 'Create New Article')
    @section('content')
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    @if (session()->has('success'))
                        <div class="alert alert-success">
                            {{ session()->get('success') }}
                        </div>
                    @endif
                    <div class="card">
                        <div class="card-header">New Article</div>
                        <div class="card-body">
                            <form action="/articles/store" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" name="title" id="title" class="form-control is-invalid">
                                    @error('title')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="body">Body</label>
                                    <textarea name="body" id="body" class="form-control is-invalid"></textarea>
                                    @error('body')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-primary">
                                    Create Article
                                </button>
                            </form>
                        </div>
                        <div class="card-footer">
                            Copyright @Inixindo | 2022
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
</body>

</html>
