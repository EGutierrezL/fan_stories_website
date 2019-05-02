<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>

            *{
              margin: 0; padding: 0;
            }
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .main{
              width: 90%;
              height: 100vh;
              margin: 20px auto;
              overflow: hidden;
            }
            .slides{
              width: 100%;
            }

            .slidesjs-pagination{
              background: #424242;
              overflow: hidden;
            }
            .slidesjs-pagination li{
              float: left;
            }
            .slidesjs-pagination li a{
              display: block;
              padding: 10px 20px;
              color: #fff;
              text-decoration: none;
            }
            .slidesjs-pagination a:hover{
              background: #000;
            }
            .slides .active{
              background: #000;
            }
            .slidesjs-navigation{
              color: #fff;
              background: #000;
              text-decoration: none;
              display: inline-block;
              padding: 10px 20px;
              float: right;
            }
            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }
          /*==================     Brand     ======================*/
          .brand {
           display: inline-block;
          }
            .brand_slogan {
             display: inline-block;
            padding-left: 10px;
            padding-bottom: 5px;
            font-size: 24px;
             vertical-align: bottom;
             float: right;
            }
            .brand a:hover {
             color: inherit;
            }
            .title {
           display: inline-block;
           overflow: hidden;
           font-weight: 700;
           font-size: 55px;
           line-height: 62px;
           color: #5ab7de;
           vertical-align: bottom;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>

        <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
        <script src="multiple/js/jquery.slides.min.js"></script>

          <script>
          $(function(){
              $(".slides").slidesjs({
                play: {
                  active: true,
                    // [boolean] Generate the play and stop buttons.
                    // You cannot use your own buttons. Sorry.
                  effect: "slide",
                    // [string] Can be either "slide" or "fade".
                  interval: 3000,
                    // [number] Time spent on each slide in milliseconds.
                  auto: false,
                    // [boolean] Start playing the slideshow on load.
                  swap: true,
                    // [boolean] show/hide stop and play buttons
                  pauseOnHover: false,
                    // [boolean] pause a playing slideshow on hover
                  restartDelay: 2500
                    // [number] restart delay on inactive slideshow
                }
              });
          });
          </script>

    </head>
    <body>

      <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
        <nav  class="navbar navbar-expand-lg navbar-light bg-dark">
  <ul class="navbar-nav mr-auto">
    <li> <a href="#">INICI</a> </li>
  </ul>
  <ul class="navbar-nav mr-auto">
    <li> <a href="#">B</a> </li>
  </ul>
  <ul class="navbar-nav mr-auto">
    <li> <a href="#">C</a> </li>
  </ul>
  <ul class="navbar-nav mr-auto">
    <li> <a href="#">D</a> </li>
  </ul>
  
  <button class="btn btn-outline-success my-2 my-sm-0" type="submit" href="index.php?action=registreUsuaris">Registre</button>
            
       </nav>
      
      <ul id="menu">
      	<li data-menuanchor="firstPage"><a href=href="#"></a></li>
      	<li data-menuanchor="secondPage"><a href="#"></a></li>
      	<li data-menuanchor="thirdPage"><a href="#"></a></li>
      </ul>

        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                  <div class="title m-b-md"> FAN STORIES WEBSITE </div> 
                   <div class="brand">
                    <a href="./">My Company</a>
                   </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
        </body>
</html>
