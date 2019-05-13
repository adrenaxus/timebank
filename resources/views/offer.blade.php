<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Nova Demo</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #eee;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            h1 {
                font-size: 48px;
            }

            blockquote {
                font-style: italic;
            }

            .hero img {
                width: 100%;
            }

            .wrapper {
                max-width: 800px;
                margin: 0 auto;
                padding: 20px 3%;
                background-color: #fff;
            }

        </style>
    </head>
    <body>
        <div class="wrapper">
            <div class="hero">
                @if ( $offer->featured_image )
                    <img src="{{ $imagePath }}">
                @endif
            </div>
            <h1>{{ $offer->title }}</h1>
            <div class="content">
                {!! $offer->content !!}
            </div>
            <p>Published by {{ $offer->author->name }} on {{ $offer->published_at->format("M j, Y") }} at {{ $offer->published_at->format("g:ia") }}</p>
        </div>
    </body>
</html>