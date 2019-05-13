<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Show Stories</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="/css/stories.css" rel="stylesheet">

    </head>
    <body>
        <div class="flex-center position-ref">

          <div class="content">
            <div class="title m-b-md">
              All the Stories
            </div>
            @foreach($stories as $story)
            <div class="palete">
              <label>{{$story->person}}</label>

              <div class="">
                {{$story->story}}
              </div>

            </div>
            <br>
            @endforeach
          </div>

        </div>
    </body>
</html>
