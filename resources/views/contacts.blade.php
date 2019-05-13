<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Contacts</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
       <!-- <link href="/css/#.css" rel="stylesheet">-->
    </head>

    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">

                <div class="title m-b-md">
                    CONTACT WITH PEOPLE
                </div>

                <div class="palete">
                  <form action="/savestory" method="post">
                    {{ csrf_field() }}
                    <label for="fname"> Send to</label>
                    <input type="text" id="fname" name="firstname" placeholder="name..">

                    <label for="content">Content</label>
                    <textarea id="content" name="content"> </textarea>

                    <input type="submit" value="Submit">
                  </form>
                </div>

            </div>
        </div>
    </body>
</html>
