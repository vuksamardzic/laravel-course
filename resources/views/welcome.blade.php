<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-12">
            <h2>init :)</h2>
            <div class="col-12">
                @if(count($posts) > 0)
                    @foreach($posts as $post)
                        <div class="card bg-light" style="margin-bottom: 20px;">
                            <div class="card-header">
                                <h4>{{ $post->title }}</h4>
                                <small>Created: {{ $post->created_at }}</small>
                            </div>
                            <div class="card-body">
                                <p style="margin-bottom: 0;">{{ $post->body  }}</p>
                            </div>
                        </div>
                    @endforeach
                @else
                    <p>no posts :(</p>
                @endif
            </div>
        </div>
    </div>
</div>
</body>
</html>