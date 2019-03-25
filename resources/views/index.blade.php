<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Yovdiy</title>
    <link rel="icon" href="../assets/images/vylogo.png">
    <link href="https://necolas.github.io/normalize.css/8.0.0/normalize.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="../assets/css/root_variables.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/index.css">
  </head>

  <body>
    <img id="VY" style="display:none;" src="../assets/images/vylogo.svg">

    <canvas id="floating_city" class="floating_city"> </canvas>

    <header class="presentation">
      <div>
        <h3>Vasyl Yovdiy
            <br> Let's be honest and cut through the marketing fluff.
            <br> You need a website or a software project that looks amazing and actually works.
            <br> Bottom line, that's what I do. And if you want to learn more about working with me, pick up the phone and give me a call (or email).
        </h3>
      </div>
    </header>


  <div class="intro">
    <div class="middle">
      <div class="inner">


        <h1>
          <a class="itemo" href="../get_cv/es"> CV </a>
          <spam> / </spam>
          <a class="itemo" href="https://github.com/vasyllenko"> GitHub </a>
        </h1>

        <h1 class="itemo" onclick="display_log()" >  <a> Log In </a> </h1>

        <div id="log_form" style="display:none; ">
          <p><input  class="itemo" type="text" id="name" placeholder="Username"/></p>
          <p><input  class="itemo" type="password" id="pass" placeholder="Password"/></p>
          <p><button class="itemo" onclick="submit_position()" type="submit" >Let me in</button></p>
        </div>

      </div>
    </div>
  </div>

  </body>

  <script src="../assets/js/index_functions.js"></script>
  <script src="../assets/js/login_request.js"></script>
  <script src="../assets/js/city.js"></script>
</html>
