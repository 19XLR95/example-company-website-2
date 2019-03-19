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

    <meta name="og:title" content="{{__('localization.metaDashboardTitle')}}">
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

    <title>{{__('localization.metaDashboardTitle')}}</title>

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

          @if($numberOfProject == 'multiple')
            <a href="projects" id="changeBtn" class="ui right floated icon button">
              {{__('localization.projectsBtn')}} &nbsp;<i class="fas fa-clipboard-list"></i></i>
            </a>
          @endif
        </div>

        <div class="ui ten wide column">
          <div class="ui segment">
            <h1 id="dashboardTitle">{{__('localization.dashboardTitle')}}</h1>
            <hr>

            <table class="ui very basic table">
              <tbody>
                <tr>
                  <td class="three wide tableTitle"><i class="fas fa-tasks"></i>&nbsp; {{__('localization.dashboardProject')}}</td>
                  <td class="tableDescription">{{$project->projectName . ' (' . $project->projectID . ')'}}</td>
                </tr>

                <tr>
                  <td class="three wide tableTitle"><i class="fas fa-building"></i>&nbsp; {{__('localization.dashboardCompany')}}</td>
                  <td class="tableDescription">{{$customer->company}}</td>
                </tr>

                <tr>
                  <td class="three wide tableTitle"><i class="fas fa-user"></i>&nbsp; {{__('localization.dashboardName')}}</td>
                  <td class="tableDescription">{{$customer->name . ' ' . $customer->surname . ' (' . $customer->customerID . ')'}}</td>
                </tr>

                <tr>
                  <td class="three wide tableTitle"><i class="fas fa-globe"></i>&nbsp; {{__('localization.dashboardWebsite')}}</td>
                  <td class="tableDescription">{{$customer->website}}</td>
                </tr>

                <tr>
                  <td class="three wide tableTitle"><i class="fas fa-envelope"></i>&nbsp; {{__('localization.dashboardEmail')}}</td>
                  <td class="tableDescription">{{$customer->email}}</td>
                </tr>

                <tr>
                  <td class="three wide tableTitle"><i class="fas fa-phone"></i>&nbsp; {{__('localization.dashboardPhone')}}</td>
                  <td class="tableDescription">{{$customer->phone}}</td>
                </tr>

                <tr>
                  <td class="three wide tableTitle"><i class="fas fa-map-marker-alt"></i>&nbsp; {{__('localization.dashboardAddress')}}</td>
                  <td class="tableDescription">{{$customer->address}}</td>
                </tr>

                <tr>
                  <td class="three wide tableTitle"><i class="fas fa-file-invoice-dollar"></i>&nbsp; {{__('localization.dashboardPayment')}}</td>
                  <td class="tableDescription">{{$project->paymentStatus}}</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

        <div class="ui six wide column">
          <h3 id="barDescription">{{__('localization.dashboardPercentageTitle')}}</h3>

          <div id="circularBar"></div>

          <a id="previewBtn" href="preview?pid={{$project->projectID}}&page=index" target="_blank" class="ui primary button">{{__('localization.previewBtn')}}</a>
        </div>
      </div>

      <div style="margin-top: 50px;" class="ui one column grid">
        <div class="ui column">
          <div class="ui raised segments">
            <div class="ui segment">
              <h1 id="dashboardTitle">{{__('localization.dashboardStatusTitle')}}</h1>
            </div>

            @foreach ($project->statusUpdates as $statusUpdate)
              @php
                $date = date('d M Y', strtotime(substr($statusUpdate->createdAt, 0, 10)));

                if($lang == 'tr')
                {
                  switch(substr($date, 3, 3))
                  {
                    case 'Jan':
                      $date = str_replace('Jan', 'Oca', $date);
                      break;

                    case 'Feb':
                      $date = str_replace('Feb', 'Şub', $date);
                      break;

                    case 'Apr':
                      $date = str_replace('Apr', 'Nis', $date);
                      break;

                    case 'Jun':
                      $date = str_replace('Jun', 'Haz', $date);
                      break;

                    case 'Jul':
                      $date = str_replace('Jul', 'Tem', $date);
                      break;

                    case 'Aug':
                      $date = str_replace('Aug', 'Ağu', $date);
                      break;

                    case 'Sep':
                      $date = str_replace('Sep', 'Eyl', $date);
                      break;

                    case 'Sept':
                      $date = str_replace('Sept', 'Eyl', $date);
                      break;

                    case 'Oct':
                      $date = str_replace('Oct', 'Eki', $date);
                      break;

                    case 'Nov':
                      $date = str_replace('Nov', 'Kas', $date);
                      break;

                    case 'Dec':
                      $date = str_replace('Dec', 'Ara', $date);
                      break;
                  }
                }
              @endphp

              <div class="ui segment statusSegment">
                <h4 class="tableTitle">
                  <i class="fas fa-check"></i>&nbsp; {{$statusUpdate->title}}
                  <span class="statusDate">{{$date}}</span>
                </h4>

                <p style="padding-left: 21px;" class="tableDescription">{{$statusUpdate->description}}</p>
              </div>
            @endforeach
          </div>
        </div>
      </div>

      <footer>
        <div style="position: relative; top: 50%; transform: translateY(-50%);" class="ui stackable two column grid">
          <div class="ui left aligned column">
            <span class="footerText">{{__('localization.footerCopyrights')}} | <a style="color: white; border-bottom: 1px solid white;" href="https://examplesoft.com" target="_blank">{{__('localization.brandText')}}</a></span>
          </div>

          <div id="footerRightCol" class="ui right aligned column">
            <span class="footerText">{{__('localization.footerProblem')}} <a style="color: white; border-bottom: 1px solid white;" href="https://examplesoft.com/contact" target="_blank">{{__('localization.footerContactUs')}}</a></span>
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
    var bar = new ProgressBar.Circle(circularBar, {
      color: '#3C97DE',
      strokeWidth: 8,
      trailColor: 'white',
      trailWidth: 0.5,
      easing: 'easeInOut',
      duration: 1000,
      step: function(state, circle) {
        var value = Math.round(circle.value() * 100);
        if (value === 0) {
          @if($lang == 'tr')
            circle.setText('%0');
          @else
            circle.setText('0%');
          @endif
        } else {
          @if($lang == 'tr')
            circle.setText('%' + value);
          @else
            circle.setText(value + '%');
          @endif
        }

      }
    });

    bar.text.style.fontFamily = '"Poppins", sans-serif';
    bar.text.style.fontSize = '50px';

    bar.animate({{$project->percentage}});

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
