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

    <button id="modalMenuBtn" class="ui icon inverted basic button">
      <i class="fas fa-bars"></i>
    </button>

    <div id="modalMenu" class="ui basic modal">
      <i class="close icon"></i>

      <div class="ui center aligned grid">
        <div class="ui sixteen wide column">
          <a class="active item menuItem" href="preview?pid={{$projectID}}&page=index">Home</a>
        </div>
        <div class="ui sixteen wide column">
          <a class="item menuItem" href="preview?pid={{$projectID}}&page=features">Features</a>
        </div>
        <div class="ui sixteen wide column">
          <a class="item menuItem" href="preview?pid={{$projectID}}&page=pricing">Pricing</a>
        </div>
        <div class="ui sixteen wide column">
          <a class="item menuItem" href="preview?pid={{$projectID}}&page=contact">Contact</a>
        </div>
        <div class="ui sixteen wide column">
          <a class="ui violet button menuItem" href="preview?pid={{$projectID}}&page=login">Login</a>
        </div>
        <div class="ui sixteen wide column">
          <div class="ui right dropdown item menuItem">
            <i class="fas fa-globe-americas"></i>
            <i class="dropdown icon"></i>
            <div class="menu">
              <div class="item">English</div>
              <div class="item">Türkçe</div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div id="menu" class="ui secondary menu">
      <a class="item menuItem" href="preview?pid={{$projectID}}&page=index">Home</a>
      <a class="item menuItem" href="preview?pid={{$projectID}}&page=features">Features</a>
      <a class="item menuItem" href="preview?pid={{$projectID}}&page=pricing">Pricing</a>
      <a class="item menuItem" href="preview?pid={{$projectID}}&page=contact">Contact</a>
      <a class="ui violet button menuItem" href="preview?pid={{$projectID}}&page=login">Login</a>
      <div class="ui right dropdown item menuItem">
        <i class="fas fa-globe-americas"></i>
        <i class="dropdown icon"></i>
        <div class="menu">
          <div class="item">English</div>
          <div class="item">Türkçe</div>
        </div>
      </div>
    </div>

    <div class="ui image">
      <img src="PCXEC022019142/res/images/bg6.png" alt="Compass+">

      <div id="mainBgDimmer" class="ui active dimmer">
        <div class="content">
          <div class="ui grid">
            <div class="ui one column row">
              <div class="ui column">
                <p id="slogan">Improve your professional data insight.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="ui stackable centered grid">
      <div class="ui four wide column">
        <div class="ui raised segment">
          <p class="planTitle">Personal</p>
          <p class="planPrice">7,99$<b class="planText">/month</b></p>

          <hr>

          <div class="ui list">
            <p class="item planText">
              <i class="far fa-check-square"></i> Morbi aliquet ipsum
            </p>
            <p class="item planText">
              <i class="far fa-check-square"></i> Pellentesque non
            </p>
            <p class="item planText">
              <i class="far fa-check-square"></i> Etiam laoreet viverra
            </p>
            <p class="item planText">
              <i class="far fa-check-square"></i> Vestibulum eu orci pharetra
            </p>
            <p class="item planText">
              <i class="far fa-check-square"></i> Etiam et sollicitudin magna
            </p>
            <p class="item planText">
              <i class="far fa-check-square"></i> Cras sapien purus
            </p>
            <p class="item planText">
              <i class="far fa-check-square"></i> Aenean iaculis
            </p>
            <p class="item planText">
              <i class="far fa-check-square"></i> Cras id libero lorem
            </p>
          </div>

          <hr>

          <button class="ui violet fluid button planBtn">Purchase</button>
        </div>
      </div>

      <div class="ui four wide column">
        <div class="ui raised segment">
          <div class="ui teal right ribbon label sectionsText">Most Popular</div>

          <p class="planTitle">Business</p>
          <p class="planPrice">12,99$<b class="planText">/month</b></p>

          <hr>

          <div class="ui list">
            <p class="item planText">
              <i class="far fa-check-square"></i> Morbi aliquet ipsum
            </p>
            <p class="item planText">
              <i class="far fa-check-square"></i> Pellentesque non
            </p>
            <p class="item planText">
              <i class="far fa-check-square"></i> Etiam laoreet viverra
            </p>
            <p class="item planText">
              <i class="far fa-check-square"></i> Vestibulum eu orci pharetra
            </p>
            <p class="item planText">
              <i class="far fa-check-square"></i> Etiam et sollicitudin magna
            </p>
            <p class="item planText">
              <i class="far fa-check-square"></i> Donec interdum eget
            </p>
            <p class="item planText">
              <i class="far fa-check-square"></i> Suspendisse
            </p>
            <p class="item planText">
              <i class="far fa-check-square"></i> Aenean iaculis
            </p>
          </div>

          <hr>

          <button class="ui violet fluid button planBtn">Purchase</button>
        </div>
      </div>

      <div class="ui four wide column">
        <div class="ui raised segment">
          <p class="planTitle">Ultimate</p>
          <p class="planPrice">17,99$<b class="planText">/month</b></p>

          <hr>

          <div class="ui list">
            <p class="item planText">
              <i class="far fa-check-square"></i> Morbi aliquet ipsum
            </p>
            <p class="item planText">
              <i class="far fa-check-square"></i> Pellentesque non
            </p>
            <p class="item planText">
              <i class="far fa-check-square"></i> Etiam laoreet viverra
            </p>
            <p class="item planText">
              <i class="far fa-check-square"></i> Vestibulum eu orci pharetra
            </p>
            <p class="item planText">
              <i class="far fa-check-square"></i> Pellentesque et
            </p>
            <p class="item planText">
              <i class="far fa-check-square"></i> Integer lectus urna
            </p>
            <p class="item planText">
              <i class="far fa-check-square"></i> Morbi eu porttitor
            </p>
            <p class="item planText">
              <i class="far fa-check-square"></i> Aenean iaculis
            </p>
          </div>

          <hr>

          <button class="ui violet fluid button planBtn">Purchase</button>
        </div>
      </div>
    </div>

    <div class="ui center aligned grid">
      <div class="ui sixteen wide column sectionsText">
        You can cancel your plan at any time you want.
      </div>

      <div class="ui sixteen wide column">
        <img class="ui centered medium image" src="PCXEC022019142/res/images/credit-cards.png" alt="Credit Cards">
      </div>
    </div>

    <div id="testimonialsGrid" class="ui centered stackable grid">
      <div class="ui sixteen wide center aligned column">
        <h1 class="sectionsText">What people say about Compass+?</h1>
      </div>

      <div class="ui five wide column">
        <p class="testimonialsText">
          Morbi nec consequat purus. Etiam faucibus volutpat neque et porta. Aenean interdum ultricies odio ac sollicitudin.
        </p>
        <h3 class="ui right aligned header sectionsText">Liam Ava
          <b class="positionText"> / Engineer at Volutpat</b>
        </h3>
      </div>

      <div class="ui five wide column">
        <p class="testimonialsText">
          Integer lectus urna, euismod in ex at, auctor sodales magna. Nunc tempus ante in nibh gravida dapibus. Morbi eu porttitor diam.
        </p>
        <h3 class="ui right aligned header sectionsText">Mia Elijah
          <b class="positionText"> / Business Manager at Nunc</b>
        </h3>
      </div>

      <div class="ui five wide column">
        <p class="testimonialsText">
          Cras nec odio luctus, tempor ipsum sed, congue purus. Vestibulum nulla libero, pharetra non nibh eu, gravida dignissim massa.
        </p>
        <h3 class="ui right aligned header sectionsText">Olivia Logan
          <b class="positionText"> / Engineer at Tempor</b>
        </h3>
      </div>
    </div>

    <div class="ui grid">
      <div class="ui sixteen wide center aligned column">
        <button class="ui violet massive button planBtn">Compare All Plans</button>
      </div>
    </div>

    <footer>
      <div class="ui padded doubling grid">
        <div id="footerCol1" class="ui two wide column">
          <div class="ui list">
            <a class="item menuItem lineMargin" href="preview?pid={{$projectID}}&page=index">Home</a>
            <a class="item menuItem lineMargin" href="preview?pid={{$projectID}}&page=features">Features</a>
            <a class="item menuItem lineMargin" href="preview?pid={{$projectID}}&page=pricing">Pricing</a>
            <a class="item menuItem lineMargin" href="preview?pid={{$projectID}}&page=contact">Contact</a>
          </div>
        </div>

        <div id="footerCol2" class="ui three wide column">
          <div class="ui list">
            <a class="item menuItem lineMargin" href="preview?pid={{$projectID}}&page=career">Career</a>
            <a class="item menuItem lineMargin" href="preview?pid={{$projectID}}&page=news">News</a>
            <a class="item menuItem lineMargin" href="preview?pid={{$projectID}}&page=contact">Request Demo</a>
            <a class="item menuItem lineMargin" href="preview?pid={{$projectID}}&page=get-started">Get Started</a>
          </div>
        </div>

        <div id="footerCol3" class="ui eleven wide column">
          <form id="newsletterForm" class="ui form">
            <div class="ui fields">
              <div class="field">
                <input type="text" placeholder="Newsletter...">
              </div>
              <button type="submit" class="ui violet icon button">
                <i class="fas fa-chevron-right"></i>
              </button>
            </div>
          </form>

          <div id="socialList" class="ui right aligned horizontal list">
            <a class="icon item menuItem socialLink" href="#">
              <i class="fab fa-twitter"></i>
            </a>
            <a class="icon item menuItem socialLink" href="#">
              <i class="fab fa-linkedin-in"></i>
            </a>
            <a class="icon item menuItem socialLink" href="#">
              <i class="fab fa-youtube"></i>
            </a>
            <a class="icon item menuItem socialLink" href="#">
              <i class="fab fa-facebook-f"></i>
            </a>
          </div>
        </div>

        <div class="ui sixteen wide center aligned column">
          <a style="color: white;" class="sectionsText" href="https://examplesoft.com">
              All rights reserved. | Example Software &reg
            </a>
        </div>
      </div>
    </footer>
  </body>

  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js"></script>
  <script src="PCXEC022019142/js/compassplus.js"></script>
</html>
