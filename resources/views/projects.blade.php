<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="{{__('localization.metaDescription')}}">
    <meta name="keywords" content="example, example Software, example, example software, example yazılım, example Yazılım, customer monitor panel, müşteri monitör paneli, Customer Monitor Panel, Müşteri Monitör Paneli">
    <meta name="copyright"content="{{__('localization.brandText')}}">
    <meta name="language" content="tr">
    <meta name="language" content="en">
    <meta name="robots" content="index,follow">
    <meta name="author" content="{{__('localization.brandText')}}, {{__('localization.contactEmail')}}">
    <meta name="url" content="https://customer.examplesoft.com">

    <meta name="og:title" content="{{__('localization.metaProjectsTitle')}}">
    <meta name="og:url" content="https://customer.examplesoft.com">
    <meta name="og:image" content="http://customer.examplesoft.com/res/images/logo.png">
    <meta name="og:site_name" content="{{__('localization.brandText')}}">
    <meta name="og:description" content="{{__('localization.metaDescription')}}">
    <meta name="og:email" content="{{__('localization.contactEmail')}}">

    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Mobile Chrome, Firefox And Opera -->
    <meta name="theme-color" content="#4391ff">

    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#4391ff">

    <!-- iOS Safari  -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="#4391ff">

    <link rel="canonical" href="https://customer.examplesoft.com">

    <link rel="icon" href="res/images/icon.png">

    <title>{{__('localization.metaProjectsTitle')}}</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300i,400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/cca.css">
  </head>

  <body>
    <div style="height: 100%; padding-top: 5%;" class="ui container">
      <div class="ui stackable grid">
        <div id="logoCol" class="ui eight wide column">
          <a href="/">
            <img src="res/images/logo.png" alt="example Software Logo" width="150px">
          </a>
        </div>

        <div id="btnCol" class="ui eight wide column">
          <div id="langDropdown" class="ui right aligned dropdown">
            <i class="fas fa-globe-americas"></i>
            <i class="dropdown icon"></i>
            <div class="menu">
              <div class="@if($lang == 'en') {{'active'}} @endif item" onclick="changeLang(this)">English</div>
              <div class="@if($lang == 'tr') {{'active'}} @endif item" onclick="changeLang(this)">Türkçe</div>
            </div>
          </div>

          <button id="logoutBtn" class="ui primary right floated icon button">
            {{__('localization.logoutBtn')}} &nbsp;<i class="fas fa-sign-out-alt"></i>
          </button>
        </div>
      </div>

      <div class="ui three column stackable grid">
        @foreach ($projects as $project)
          <div class="ui center aligned column">
            <div class="ui segment">
              <i style="font-size: 80px; color: rgba(0, 0, 0, 0.7);" class="fas fa-clipboard-list"></i>

              <h3 id="dashboardTitle">{{__('localization.projectsTitle')}} {{$project->projectID}}</h3>

              <p style="font-size: 17px;" class="tableDescription">{{$project->projectName}}</p>

              <a style="font-family: 'Poppins', sans-serif !important; font-weight: 400 !important; border-radius: 25px; margin-top: 25px;" href="{{'dashboard?pid=' . $project->projectID}}" class="ui primary large button">{{__('localization.projectsMonitorBtn')}}</a>
            </div>
          </div>
        @endforeach
      </div>

      <footer style="position: relative; bottom: -50%;">
        <div style="position: relative; top: 50%; transform: translateY(-50%);" class="ui stackable two column grid">
          <div class="ui left aligned column">
            <span style="color: white;" class="footerText">{{__('localization.footerCopyrights')}} | <a style="color: white; border-bottom: 1px solid white;" href="https://examplesoft.com" target="_blank">{{__('localization.brandText')}}</a></span>
          </div>

          <div id="footerRightCol" class="ui right aligned column">
            <span style="color: white;" class="footerText">{{__('localization.footerProblem')}} <a style="color: white; border-bottom: 1px solid white;" href="https://examplesoft.com/contact" target="_blank">{{__('localization.footerContactUs')}}</a></span>
          </div>
        </div>
      </footer>
    </div>
  </body>

  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js"></script>
  <script src="js/progressbar.js"></script>
  <script src="js/cca.js"></script>
  <script>
    $('#logoutBtn').click(
      function()
      {
        var request = $.ajax(
          {
            url: '/logout',
            type: 'post',
            data: {logout: 'logout', _token: '{{ csrf_token() }}'}
          }
        );

        request.done(
          function(response, textStatus, jqXHR)
          {
            if(response.status === 'success')
            {
              window.location.href = response.redirectURL;
            }
            else
            {
              console.log('ERROR in DONE METHOD!');
            }
          }
        );

        request.fail(
          function(jqXHR, textStatus, errorThrown)
          {
            console.log('ERROR in FAIL METHOD!');
          }
        );
      }
    );

    function changeLang(element)
    {
      var choosenLang = $(element).text();

      var request = $.ajax(
        {
          url: '/change-language',
          type: 'post',
          data: {toLang: choosenLang, _token: '{{ csrf_token() }}'}
        }
      );

      request.done(
        function(response, textStatus, jqXHR)
        {
          if(response.status === 'success')
          {
            window.location.reload();
          }
          else
          {
            console.log('ERROR in DONE METHOD!');
          }
        }
      );

      request.fail(
        function(jqXHR, textStatus, errorThrown)
        {
          console.log('ERROR in FAIL METHOD!');
        }
      );
    }
  </script>
</html>
