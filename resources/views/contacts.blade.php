<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Contacts</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="/css/stories.css" rel="stylesheet">
    </head>

    <body>
    
    @extends('layouts.app')
    @section('content')
    
        <div class="flex-center position-ref full-height">
            <div class="content">

                <div class="title m-b-md">
                    CONTACT WITH PEOPLE
                </div>

                <div class="palete">

                @if($errors->any())
                 @foreach($errors->all() as $error)
                 <p>{{ $error }}</p>
                 @endforeach
                @endif
                  <form action="{{ route('contact') }}" method="post">
                    {{ csrf_field() }}
                    <label for="fname"> Send to</label>
                    <input type="text" name="name" value="{{ auth()->user()->name }}">
                    {!! $errors->first('name','<small class="alert alert-danger btn-block">:message</small><br>') !!}

                    <input type="text" name="email" placeholder="{{ auth()->user()->email }}">
                    {!! $errors->first('email','<small class="alert alert-danger btn-block">:message</small><br>') !!}

                    <label for="content">Content</label>
                    <textarea id="content" name="all_content" value="{{ old('all_content') }}"> </textarea>
                    {!! $errors->first('all_content','<small class="alert alert-danger btn-block">:message</small><br>') !!}

                    <input type="submit" value="Submit">
                  </form>
                </div>

            </div>
        </div>
        @endsection('content')
    </body>
</html>
