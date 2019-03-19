<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="The most powerful tool for analizing data.">


    <title>The Most Powerful Analyze Tool | Compass+</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa:300,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300i,400,700" rel="stylesheet">
    <link rel="stylesheet" href="PCXEC022019142/css/compassplus.css">
  </head>

  <body>
    <div class="ui red compact icon message">
      <i class="circle info icon"></i>
      <div class="content">
        <div style="font-family: 'Poppins', sans-serif !important; font-weight: 400 !important;" class="header">
          {{__('localization.previewTitle')}}
        </div>
        <p style="font-family: 'Poppins', sans-serif !important; font-weight: 400 !important;">{{__('localization.previewDescription')}}</p>
      </div>
    </div>

    <a id="logo" href="preview?pid={{$projectID}}&page=index" id="logo" class="ui small image">
      <img src="PCXEC022019142/res/images/logo.png" alt="Compass+ Logo">
    </a>

    <div id="loginGrid" class="ui grid">
      <div id="loginBg" class="ui seven wide computer tablet only column">
        <p id="loginTitle">Compass+</p>
        <p id="loginText">Application Login</p>
      </div>

      <div id="loginFormCol" class="ui middle aligned nine wide column">
        <div id="loginSegment" class="ui compact raised segment">
          <form class="ui form">
            <div class="ui field">
              <a href="preview?pid={{$projectID}}&page=index">
                <img id="formLogo" class="ui small centered image hidden" src="PCXEC022019142/res/images/logo-dark.png" alt="Compass+">
              </a>
            </div>
            <div class="ui field">
              <label class="sectionsText">Username</label>
              <input type="text" placeholder="Username">
            </div>

            <div class="ui field">
              <label class="sectionsText">Password</label>
              <input type="password" placeholder="Password">
            </div>

            <div class="ui field">
              <button class="ui violet fluid button sectionsText">Login</button>
            </div>

            <div class="ui field">
              <a class="sectionsText" href="#">Forgot Password?</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </body>

  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js"></script>
  <script src="PCXEC022019142/js/compassplus.js"></script>
</html>
